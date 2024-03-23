<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/thread.css">
    <title>Fanpit</title>
   
</head>

<body>

    <nav class="navbar sticky-top navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" style="padding:0" href="#"><img class="fanpit-logo" src="../images/fanpit.png"
                alt="fanpit"></a>

        <input class="form-control" type="search" placeholder="Search" aria-label="Search">

        <div class="navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><img class="icon" src="../icons/message.png" alt="Contact"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img class="icon" src="../icons/notification.png" alt="Notifications"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img class="icon" src="../icons/usericon.png" alt="User"></a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- All Elements -->
    <div class="container">

        <!-- Sidebar -->
        <div class="col-lg-4 custom-sidebar">
            <div class="button-section">
                <button class="button">
                    <img src="../icons/home2.png" alt="Home"
                        style="width: 25px; height: 25px; color:black; margin-right: 5px;" /> Home
                </button>
                <button class="button">
                    <img src="../icons/popular.png" alt="Popular"
                        style="width: 25px; height: 25px; color:black; margin-right: 5px;" /> Popular
                </button>
                <button class="button">
                    <img src="../icons/suggested.png" alt="All"
                        style="width: 25px; height: 25px; color:black; margin-right: 5px;" /> Suggested
                </button>
            </div>

            <div class="button-section">
                <h2 class="cr-light" style="font-size: 12px;">RECENT</h2>
                <button class="button cr-light" style="font-size: 12px;">c/sports</button>
                <button class="button cr-light" style="font-size: 12px;">c/tech</button>
                <button class="button cr-light" style="font-size: 12px;">c/computerscience</button>
            </div>

            <div class="button-section">
                <h2 class="cr-light" style="font-size: 12px;">COMMUNITIES</h2>
                <button class="button">
                    <img src="../icons/community.png" alt="Community"
                        style="width: 25px; height: 25px; color:black; margin-right: 5px;" /> Join a Community!
                </button>
            </div>

            <div class="button-section">
                <h2 class="cr-light" style="font-size: 12px;">RESOURCES</h2>
                <button class="button">
                    <img src="../icons/about.png" alt="About"
                        style="width: 25px; height: 25px; color:black; margin-right: 5px;" /> About Converso
                </button>
                <button class="button">
                    <img src="../icons/help.png" alt="Help"
                        style="width: 25px; height: 25px; color:black; margin-right: 5px;" /> Help
                </button>
                <button class="button">
                    <img src="../icons/contact.png" alt="Contact"
                        style="width: 25px; height: 25px; color:black; margin-right: 5px;" /> Contact Information
                </button>
            </div>
        </div>

        <!-- Main Content / Posts Section -->
        <div class="col-lg-8 main-posts">


            <div class="card mb-4 main-post-card">
                <div class="user-info">
                    <img src="/images/user3.png" class="user-profile">
                    <p>
                        u/sebastian
                    </p>
                </div>
                
                <div class="card-body">
                    <h5 class="cr-light" style="font-size: 12px;">c/fashion</h5>
                    <h5 class="card-title">Unveiling the NBA's Fashion Trends: Players Off the Court</h5>
                    <p class="card-text">Beyond their skills on the court, NBA players are becoming style icons with
                        their unique fashion choices. From pre-game outfits to post-game press conference looks, players
                        like Russell Westbrook, LeBron James, and James Harden are setting trends and making
                        statements...</p>
                </div>
                <img src="../images/lebrondwayne.webp" class="card-img-top" alt="Image Description">

                <div class="post-buttons">
                    <button class="like-button">
                        <img src="../icons/like.png" alt="Like Icon"> Like
                    </button>
                    <button class="comment-button">
                        <img src="../icons/comment.png" alt="Comment Icon"> Comment
                    </button>
                    <button class="share-button">
                        <img src="../icons/share.png" alt="Share Icon"> Share
                    </button>
                </div>
                
                <div class="comment-container">
                    <textarea rows="1" type="text" class="comment-text" placeholder="Leave a Comment"></textarea>
                    <button type="submit" class="btn btn-primary">Post</button>
                </div>


               
            </div>

            <h2>Comments</h2>

            <div class="card mb-4 main-post-card">
                <div class="post-header">
                    <img src="/images/user1.png" class="user-profile">
                    <div class="post-info">
                        <div class="username">f/Carlos</div>
                        <div class="date">2024-02-05 at 4:44pm</div>
                    </div>
                </div>
                
                Absolutely love how NBA players are owning the fashion game off the court! 🏀👔 
                It's not just about the game, 
                but also the style statements they make. 
                Westbrook, LeBron, and Harden are true trendsetters. 
                Who's your favorite style icon in the NBA? #NBAFashion #StyleIcons
                <div class="reply-link-container">
                    <a class="reply-link" href="#">Reply</a>
                </div>
            </div>

            <div class="replies">
                <div class="reply-container">
                    <div class="reply-main">
                        <div class="post-header">
                            <img src="/images/user2.png" class="user-profile">
                            <div class="post-info">
                                <div class="username">f/Carlos</div>
                                <div class="date">2024-02-05 at 4:44pm</div>
                            </div>
                        </div>
                        sample text
                        <div class="reply-link-container">
                            <a class="reply-link" href="#">Reply</a>
                        </div>
                    </div>
                    <div class="reply-container">
                        <div class="reply-main">
                            <div class="post-header">
                                <img src="/images/user4.png" class="user-profile">
                                <div class="post-info">
                                    <div class="username">f/Carlos</div>
                                    <div class="date">2024-02-05 at 4:44pm</div>
                                </div>
                            </div>
                            sample text
                            <div class="reply-link-container">
                                <a class="reply-link" href="#">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="reply-container">
                        <div class="reply-main">
                            <div class="post-header">
                                <img src="/images/user3.png" class="user-profile">
                                <div class="post-info">
                                    <div class="username">f/Carlos</div>
                                    <div class="date">2024-02-05 at 4:44pm</div>
                                </div>
                            </div>
                            sample text
                            <div class="reply-link-container">
                                <a class="reply-link" href="#">Reply</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reply-container">
                    
                    <div class="reply-main">
                        <div class="post-header">
                            <img src="/images/user3.png" class="user-profile">
                            <div class="post-info">
                                <div class="username">f/Carlos</div>
                                <div class="date">2024-02-05 at 4:44pm</div>
                            </div>
                        </div>
                        sample text
                        <div class="reply-link-container">
                            <a class="reply-link" href="#">Reply</a>
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="card mb-4 main-post-card">
                <div class="post-header">
                    <img src="/images/user4.png" class="user-profile">
                    <div class="post-info">
                        <div class="username">f/catlover2000</div>
                        <div class="date">2024-02-05 at 7:77pm</div>
                    </div>
                </div>
                
                Absolutely! The NBA has become a runway for these players. 
                Their fashion choices off the court add another layer of excitement to the league. 
                It's like a blend of sports and high fashion. 
                Who do you think has the most daring fashion sense in the NBA? 🕶️👟 #NBAFashion #DapperBallers
                <div class="reply-link-container">
                    <a class="reply-link" href="#">Reply</a>
                </div>
            </div>

            <div class="card mb-4 main-post-card">
                <div class="post-header">
                    <img src="/images/user2.png" class="user-profile">
                    <div class="post-info">
                        <div class="username">f/SportsFan123</div>
                        <div class="date">2024-02-06 at 5:55pm</div>
                    </div>
                </div>
                
                Couldn't agree more! 🌟 Each player brings their unique flavor to the fashion game. 
                Personally, I think Westbrook takes the cake with his fearless and unpredictable style. 
                He's not afraid to push the boundaries. 
                Can't wait to see the fashion moments in the upcoming playoffs! #FashionForward #NBAStyle
                <div class="reply-link-container">
                    <a class="reply-link" href="#">Reply</a>
                </div>
            </div>







        </div>

        <!-- Recent Posts -->
        <div class="col-lg-4 recent-posts">
            <div class="recent-posts">
                <h2 class="section-title cr-light" style="font-size: 12px;">RECENT POSTS</h2>

                <div class="post">
                    <h5 class="cr-light" style="font-size: 12px;">c/basketball</h5>
                    <h5 class="post-title">The MVP Race: Top Contenders in the NBA</h5>
                    <hr class="post-divider">
                </div>

                <div class="post">
                    <h5 class="cr-light" style="font-size: 12px;">c/soccer</h5>
                    <h5 class="post-title">Soccer's Rising Stars: Young Talents Making an Impact</h5>
                    <hr class="post-divider">
                </div>

                <div class="post">
                    <h5 class="cr-light" style="font-size: 12px;">c/baseball</h5>
                    <h5 class="post-title">Home Run Derby: Memorable Moments in Baseball History</h5>
                    <hr class="post-divider">
                </div>

                <div class="post">
                    <h5 class="cr-light" style="font-size: 12px;">c/soccer</h5>
                    <h5 class="post-title">Champions League Final: Exciting Match Highlights</h5>
                    <hr class="post-divider">
                </div>

                <div class="post">
                    <h5 class="cr-light" style="font-size: 12px;">c/formula1</h5>
                    <h5 class="post-title">Formula 1: Dramatic Overtakes in the Latest Grand Prix</h5>
                    <hr class="post-divider">
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>