var express = require('express');
var app = express();

var formidable = require('express-formidable');
app.use(formidable());

var mongodb = require('mongodb');
var mongoClient = mongodb.MongoClient;
var ObjectId = mongodb.ObjectId;

var http = require('http').createServer(app);
var bcrypt = require('bcrypt');
var fileSystem = require('fs');

var jwt = require('jsonwebtoken');
var accessTokenSecret = "myAccessTokenSecret1234567890";

app.use("/public", express.static(__dirname + "/public"));
app.set("view engine", "ejs");

var socketIO = require("socket.io")(http);
var SocketID = "";
var users = [];

var mainURL = "http://localhost:3000";

socketIO.on("connection", function (socket) {
    console.log("User Connected!");
    socketID = socket.id;
});
http.listen(3000, function () {
    console.log("Server started");
    mongoClient.connect("mongodb+srv://chitchat:iwp@cluster0.oezge.mongodb.net/test", {
        useNewUrlParser: true,
        useUnifiedTopology: true,
    }, function (error, client) {
        var database = client.db("Chitchat");
        console.log("Database connected");

        app.get("/", function (req, res) {
            res.render("signup");
        });
        app.get("/signup", function (req, res) {
            res.render("signup");
        });
        app.post("/signup", function (req, res) {
            var username = req.fields.username;
            var email = req.fields.email;
            var password = req.fields.pwd;
            var confirmpassword =
                req.fields.cpwd;
            var country = req.fields.country;
            var gender = req.fields.u_gender;
            var dob = req.fields.dob;
            database.collection("users").findOne({
                $or: [{ "email": email },
                { "username": username }]

            }, function (error, user) {
                if (user == null) {
                    bcrypt.hash(password, 10, function (erro, hash) {
                        database.collection("users").insertOne({
                            "username": username,
                            "email": email,
                            "password": hash,
                            "gender": gender,
                            "dob": dob,
                            "profileImage": "",
                            "coverPhoto": "",
                            "city": "",
                            "country": country,
                            "aboutMe": "",
                            "friends": [],
                            "pages": [],
                            "notfications": [],
                            "groups": [],
                            "posts": []
                        }, function (error, data) {
                            res.json({
                                "status": "success",
                                "message": "Signed up successfully.You can login now."
                            });

                        });
                    });
                } else {
                    res.json({
                        "status": "error",
                        "message": "Sorry,Email or Username already exist."
                    });
                }
            });
        });
        app.get("/login", function (req, res) {
            res.render("/login");
        });
        app.post("/login", function (req, res) {
            var username = req.fields.username;
            var pwd = req.fields.pwd;
            database.collection("users").findOne({
                "username": username
            }, function (error, user) {
                if (user == null) {
                    res.json({
                        "status": "error",
                        "message": "Username/Password does NOT Exist"
                    });
                } else {
                    bcrypt.compare(pwd, user.password, function (error, isVerify) {
                        if (isVerify) {
                            var accessToken = jwt.sign({ username: username }, accessTokenSecret);
                            database.collection("users").findOneAndUpdate({
                                "username": username
                            }, {
                                $set: {
                                    "accessToken": accessToken
                                }
                            }, function (error, data) {
                                res.json({
                                    "status": "success",
                                    "message": "Logged-in successfully",
                                    "accessToken": accessToken,
                                    "profileImage": user.profileImage
                                });
                            });
                        } else {
                            res.json({
                                "status": "error",
                                "message": "Username/Password is not correct"
                            });
                        }
                    });

                }
            });


        });
        app.get("/updateProfile", function (req, res) {
            res.render("updateProfile");
        });
        app.post("/getUser", function (req, res) {
            var accessToken = req.fields.accessToken;
            database.collection("users").findOne({
                "accessToken": accessToken
            }, function (error, user) {
                if (user == null) {
                    res.json({
                        "status": "error",
                        "message": "User has been logged out.Please log in again"
                    });
                } else {
                    res.json({
                        "status": "success",
                        "message": "Record has been fetched",
                        "data": user

                    });
                }
            });
        });
        app.get("/logout", function (req, res) {
            res.redirect("/signup");
        });
        app.post("/uploadCoverPhoto", function (req, res) {
            var accessToken = req.fields.accessToken;
            var coverPhoto = "";

            database.collection("users").findOne({
                "accessToken": accessToken
            }, function (error, user) {
                if (user == null) {
                    res.json({
                        "status": "error",
                        "message": "User has been logged out.Plase log in again."
                    });
                } else {
                    if (req.files.coverPhoto.size > 0 && req.files.coverPhoto.type.includes("image")) {
                        if (user.coverPhoto != "") {
                            fileSystem.unlink(user.coverPhoto, function (error) {

                            });
                        }
                        coverPhoto = "public/images" + new Date().getTime() + "-" + req.files.coverPhoto.name;
                        fileSystem.rename(
                            req.files.coverPhoto.path,
                            coverPhoto, function (error) {

                            }
                        );
                        database.collection("users").updateOne({
                            "accessToken": accessToken
                        }, {
                            $set: {
                                "coverPhoto": coverPhoto
                            }
                        }, function (error, data) {
                            res.json({
                                "status": "status",
                                "message": "Cover Photo has been successfully updated.",
                                data: mainURL + "/" + coverPhoto

                            });
                        });


                    } else {
                        res.json({
                            "status": "error",
                            "message": "Please select valid image format."
                        });
                    }
                }
            });
        });
        app.post("/uploadProfileImage", function (req, res) {
            var accessToken = req.fields.accessToken;
            var profileImage = "";
            database.collection("users").findOne({
                "accessToken": accessToken
            }, function (error, user) {
                if (user == null) {
                    res.json({
                        "status": "error",
                        "message": "User has been logged out.Please log in again."
                    });
                } else {
                    if (req.files.profileImage.size > 0 && req.files.profileImage.type.includes("image")) {
                        if (user.profileImage != "") {
                            fileSystem.unlink(user.profileImage, function (error) {

                            });
                        }
                        profileImage = "public/images/" + new Date().getTime() + "-" + req.files.profileImage.name;
                        fileSystem.rename(req.files.profileImage.path, profileImage, function (error) {

                        });
                        database.collection("users").updateOne({
                            "accessToken": accessToken
                        }, {
                            $set: {
                                "profileImage": profileImage
                            }
                        }, function (error, data) {
                            res.json({
                                "status": "status",
                                "message": "Profile Image has been updated.",
                                data: mainURL + "/" + profileImage

                            });
                        });
                    } else {
                        res.json({
                            "status": "error",
                            "message": "Please upload valid image."
                        });
                    }
                }
            });
        });
        app.post("/updateProfile", function (req, res) {
            var accessToken = req.fields.accessToken;
            // var name = req.fields.name;
            var dob = req.fields.dob;
            var city = req.fields.city;
            var country = req.fields.country;
            var aboutMe = req.fields.aboutMe;
            database.collection("users").findOne({
                "accessToken": accessToken
            }, function (error, user) {
                if (user == null) {
                    res.json({
                        "status": "error",
                        "message": "Try to Login Again."
                    });
                } else {
                    database.collection("users").updateOne({
                        "accessToken": accessToken
                    }, {
                        $set: {
                            "dob": dob,
                            "city": city,
                            "country": country,
                            "aboutMe": aboutMe
                        }
                    }, function (error, data) {
                        res.json({
                            "status": "status",
                            "message": "Profile data has been successfully updated."
                        });
                    });
                }
            });
        });


        app.post("/like", function(req, res){ //likers to the database
          let liked = req.fields.liked;//body of comment
          let num = Number(req.fields.Num) ; //createdAt field


          database.collection("posts").updateOne({
            "createdAt": num
          },
          {$addToSet:
            {
              "likers": liked
            }} ,
            function (err) {
              if (err) {
                console.log(err);
              }
              else{
              console.log("Success update of likers");
                  // console.log(serial)
                  //   console.log(comment) ;
            }
          }
        );
        res.redirect("/homepage") ;
        });


        app.post("/dislike", function(req, res){ //remove dislikers from the database
            let liked = req.fields.liked;//body of comment
                  let num = Number(req.fields.Num) ; //createdAt field


                  database.collection("posts").updateOne({
                    "createdAt": num
                  },
                  {$pull:
                    {
                      "likers": liked
                    }} ,
                    function (err) {
                      if (err) {
                        console.log(err);
                      }
                      else{
                      console.log("Success deletion of likers");
                          // console.log(serial)
                          //   console.log(comment) ;
                    }
                  }
                );
                res.redirect("/homepage") ;
                });


        app.post("/comment", function(req, res){ //pushing comments to the database
          let comment = req.fields.commentBody ;//body of comment
          let serial = req.fields.No ; //createdAt field
          serial = Number(serial) ;

          database.collection("posts").updateOne({
            "createdAt": serial
          },
          {$push:
            {
              "comments": comment
            }} ,
            function (err) {
              if (err) {
                console.log(err);
              }
              else{
              console.log("Success update of comments");
                  console.log(serial)
                    console.log(comment) ;
            }
          }
        );
        res.redirect("/homepage") ;
        });

        app.get("/homepage", function (req, res) {
            res.render("homepage");
        });
        app.post("/addPost", function (req, res) {
            var accessToken = req.fields.accessToken;
            var caption = req.fields.caption;
            var image = "";
            var video = "";
            var type = req.fields.type;
            var createdAt = new Date().getTime();
            var _id = req.fields._id;
            database.collection("users").findOne({
                "accessToken": accessToken
            }, function (error, user) {
                if (user == null) {
                    res.json({
                        "status": "error",
                        "message": "User has been logged out.Please Log in again."
                    });
                } else {
                    if (req.files.image.size > 0 && req.files.image.type.includes("image")) {
                        image = "public/images/" + new Date().getTime() + "-" + req.files.image.name;
                        fileSystem.rename(req.files.image.path, image, function (error) {

                        });
                    }
                    if (req.files.video.size > 0 && req.files.video.type.includes("video")) {
                        image = "public/videos/" + new Date().getTime() + "-" + req.files.video.name;
                        fileSystem.rename(req.files.video.path, video, function (error) {

                        });
                    }
                    database.collection("posts").insertOne({ //posts inserting
                        "caption": caption,
                        "image": image,
                        "video": video,
                        "type": type,
                        "createdAt": createdAt,
                        "likers": [],
                        "comments": [],
                        "shares": [],
                        "user": {
                            "_id": user._id,
                            "username": user.username,
                            "profileImage": user.profileImage
                        }

                    }, function (error, data) {
                        database.collection("users").updateOne({
                            "accessToken": accessToken
                        }, {
                            $push: {
                                "posts": {
                                    "_id": data.insertedId,
                                    "caption": caption,
                                    "image": image,
                                    "video": video,
                                    "type": type,
                                    "createdAt": createdAt,
                                    "likers": [],
                                    "comments": [],
                                    "shares": []
                                }
                            }
                        }, function (error, data) {
                            res.json({
                                "status": "success",
                                "message": "Post has been successfully posted."
                            });
                        });
                    });
                }
            });
        });
        app.post("/getNewsfeed", function (req, res) {
            var accessToken = req.fields.accessToken;
            database.collection("users").findOne({
                "accessToken": accessToken
            }, function (error, user) {
                if (user == null) {
                    res.json({
                        "status": "error",
                        "message": "User has been logged out.Try to login again."

                    });
                } else {
                    var ids = [];
                    ids.push(user._id);
                    database.collection("posts").find()
                        .sort({
                            "createdAt": -1
                        })
                        .limit(5)
                        .toArray(function (error, data) {
                            res.json({
                                "status": "success",
                                "message": "Record has been fetched",
                                "data": data
                            });
                        });

                }
            });
        });

    });
});
