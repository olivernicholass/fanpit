<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/navbar.css">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <link rel="stylesheet" type="text/css" href="../css/media.css">
  <title>Fanpit</title>
</head>

<body>

  <nav class="navbar sticky-top navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img class="fanpit-logo" src="../images/fanpit.png" alt="fanpit"></a>
  
      <input class="form-control" type="search" placeholder="Search for posts..." aria-label="Search">
  
      <div class="navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#"><img class="icon" src="../icons/message.png" alt="Contact"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img class="icon" src="../icons/notification.png" alt="Notifications"></a>
          </li>
          <li class="nav-item profile">
            <div class="nav-link profile-icon">
                <img class="icon" src="../icons/usericon.png" alt="User">
            </div>
            <ul class="profile-menu">
                <li><a href="#">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
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
          <img src="../icons/home2.png" alt="Home" style="width: 25px; height: 25px; color:black; margin-right: 5px;"/> Home
        </button>
        <button class="button">
          <img src="../icons/popular.png" alt="Popular" style="width: 25px; height: 25px; color:black; margin-right: 5px;"/> Popular
        </button>
        <button class="button">
          <img src="../icons/suggested.png" alt="All" style="width: 25px; height: 25px; color:black; margin-right: 5px;"/> Suggested
        </button>
      </div>

      <div class="button-section">
        <h2 class="cr-light" style="font-size: 12px;">RECENT</h2>
        <button class="button" style="font-size: 12px;">f/basketball</button>
        <button class="button" style="font-size: 12px;">f/football</button>
        <button class="button" style="font-size: 12px;">f/tennis</button>
      </div>

      <div class="button-section">
        <h2 class="cr-light" style="font-size: 12px;">COMMUNITIES</h2>
        <button class="button">
          <img src="../icons/community.png" alt="Community" style="width: 25px; height: 25px; color:black; margin-right: 5px;"/> Join a Community!
        </button>
      </div>

      <div class="button-section">
        <h2 class="cr-light" style="font-size: 12px;">RESOURCES</h2>
        <button class="button">
          <img src="../icons/about.png" alt="About" style="width: 25px; height: 25px; color:black; margin-right: 5px;"/> About Fanpit
        </button>
        <button class="button">
          <img src="../icons/help.png" alt="Help" style="width: 25px; height: 25px; color:black; margin-right: 5px;"/> Help
        </button>
        <button class="button">
          <img src="../icons/contact.png" alt="Contact" style="width: 25px; height: 25px; color:black; margin-right: 5px;"/> Contact Information
        </button>
      </div>
    </div>

    <!-- Main Content / Posts Section -->
    <div class="col-lg-8 main-posts">
      <div class="card mb-4 main-post-card">
        <img src="../images/drose.jpg" class="card-img-top" alt="Image Description">
        <div class="card-body">
          <h5 class="cr-light" style="font-size: 12px;">f/basketball</h5>
          <h5 class="card-title">Who is the best player in the NBA (East-Conference?)</h5>
          <p class="card-text">Prominent candidates for this distinction included Giannis Antetokounmpo from the Milwaukee Bucks, Kevin Durant representing the Brooklyn Nets, and Joel Embiid of the Philadelphia 76ers...</p>
        </div>
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
      </div>

      <div class="card mb-4 main-post-card">
        <img src="../images/barca.jpg" class="card-img-top" alt="Image Description">
        <div class="card-body">
          <h5 class="cr-light" style="font-size: 12px;">f/football</h5>
          <h5 class="card-title">The Legendary Trio: Messi, Suarez, and Neymar</h5>
          <p class="card-text">As one of the most formidable attacking trios in the history of soccer, Lionel Messi, Luis Suarez, and Neymar Jr. formed an unstoppable force during their time at FC Barcelona. Their combination of skill, chemistry, and goal-scoring prowess mesmerized fans worldwide, leading Barcelona to numerous domestic and international titles...</p>
        </div>
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
      </div>

      <div class="card mb-4 main-post-card">
        <img src="../images/lebrondwayne.webp" class="card-img-top" alt="Image Description">
        <div class="card-body">
          <h5 class="cr-light" style="font-size: 12px;">f/basketball</h5>
          <h5 class="card-title">Unveiling the NBA's Fashion Trends: Players Off the Court</h5>
          <p class="card-text">Beyond their skills on the court, NBA players are becoming style icons with their unique fashion choices. From pre-game outfits to post-game press conference looks, players like Russell Westbrook, LeBron James, and James Harden are setting trends and making statements...</p>
        </div>
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
      </div>

      <div class="card mb-4 main-post-card">
        <div class="card-body">
          <h5 class="cr-light" style="font-size: 12px;">f/tennis</h5>
          <h5 class="card-title">The Battle of the Coasts: Comparing Western and Eastern Conference Dominance</h5>
          <p class="card-text">In the ongoing NBA season, the rivalry between the Western and Eastern Conferences is as intense as ever. Teams from each coast are showcasing their strengths, and debates about which conference is superior are heating up among fans and analysts...</p>
        </div>
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
      </div>

      <div class="card mb-4 main-post-card">
        <div class="card-body">
          <h5 class="cr-light" style="font-size: 12px;">f/tennis</h5>
          <h5 class="card-title">The Battle of the Coasts: Comparing Western and Eastern Conference Dominance</h5>
          <p class="card-text">In the ongoing NBA season, the rivalry between the Western and Eastern Conferences is as intense as ever. Teams from each coast are showcasing their strengths, and debates about which conference is superior are heating up among fans and analysts...</p>
        </div>
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
      </div>

      <div class="card mb-4 main-post-card">
        <div class="card-body">
          <h5 class="cr-light" style="font-size: 12px;">f/basketball</h5>
          <h5 class="card-title">The Battle of the Coasts: Comparing Western and Eastern Conference Dominance</h5>
          <p class="card-text">In the ongoing NBA season, the rivalry between the Western and Eastern Conferences is as intense as ever. Teams from each coast are showcasing their strengths, and debates about which conference is superior are heating up among fans and analysts...</p>
        </div>
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
      </div>

      <div class="card mb-4 main-post-card">
        <img src="../images/lebrondwayne.webp" class="card-img-top" alt="Image Description">
        <div class="card-body">
          <h5 class="cr-light" style="font-size: 12px;">f/basketball</h5>
          <h5 class="card-title">Unveiling the NBA's Fashion Trends: Players Off the Court</h5>
          <p class="card-text">Beyond their skills on the court, NBA players are becoming style icons with their unique fashion choices. From pre-game outfits to post-game press conference looks, players like Russell Westbrook, LeBron James, and James Harden are setting trends and making statements...</p>
        </div>
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
      </div>

      <div class="card mb-4 main-post-card">
        <div class="card-body">
          <h5 class="cr-light" style="font-size: 12px;">f/basketball</h5>
          <h5 class="card-title">The Battle of the Coasts: Comparing Western and Eastern Conference Dominance</h5>
          <p class="card-text">In the ongoing NBA season, the rivalry between the Western and Eastern Conferences is as intense as ever. Teams from each coast are showcasing their strengths, and debates about which conference is superior are heating up among fans and analysts...</p>
        </div>
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
      </div>

      <div class="card mb-4 main-post-card">
        <div class="card-body">
          <h5 class="cr-light" style="font-size: 12px;">f/basketball</h5>
          <h5 class="card-title">The Battle of the Coasts: Comparing Western and Eastern Conference Dominance</h5>
          <p class="card-text">In the ongoing NBA season, the rivalry between the Western and Eastern Conferences is as intense as ever. Teams from each coast are showcasing their strengths, and debates about which conference is superior are heating up among fans and analysts...</p>
        </div>
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