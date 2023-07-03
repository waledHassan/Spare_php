<header class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-6">
              <div class="header-left d-flex align-items-center">
                <div class="menu-toggle-btn mr-20">
                  <button
                    id="menu-toggle"
                    class="main-btn primary-btn btn-hover"
                  >
                    <i class="lni lni-chevron-left me-2"></i> Menu
                  </button>
                </div>
                <div class="header-search d-none d-md-flex">
                  <form action="#">
                    <input type="text" placeholder="Search..." />
                    <button><i class="lni lni-search-alt"></i></button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-7 col-6">
              <div class="header-right">
                <!-- notification start -->
                <div class="notification-box ml-15 d-none d-md-flex">
                  <button
                    class="dropdown-toggle"
                    type="button"
                    id="notification"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <i class="lni lni-alarm"></i>
                    <span><?php
                      $stmt = $conn -> prepare("SELECT count(*) as counter FROM messages ");
                      $stmt -> execute();
                      $message = $stmt -> fetch();
                      echo $message['counter'];
                    
                    ?></span>
                  </button>
                  <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="notification"
                  >
                  <?php
                            $stmt = $conn -> prepare("SELECT * FROM messages LIMIT 5");
                            $stmt -> execute();
                            $comments = $stmt -> fetchAll();
                            foreach($comments as $comment){

                           
                          
                          ?>
                    <li>
                      <a href="#0">
                        <div class="image">
                          <img src="assets/images/lead/lead-6.png" alt="" />
                        </div>
                        <div class="content">
                          <h6><?php 
                            $user_id = $comment['user_id'];
                            $stmt = $conn -> prepare("SELECT * FROM users WHERE id = ?");
                            $stmt ->execute(array($user_id));
                            $users = $stmt -> fetchAll();
                          foreach($users as $user){
                            echo $user['firstname']; 
                          }
                          ?>
                            <span class="text-regular">
                            <?php echo $comment['message']; ?>
                            </span>
                          </h6>
                          <p>
                          <?php echo $comment['message']; ?>
                          </p>
                          <span>10 mins ago</span>
                        </div>
                      </a>
                    </li>
                    <?php
                            }
                    ?>
                  
                  </ul>
                </div>
                <!-- notification end -->
                <!-- message start -->
                <div class="header-message-box ml-15 d-none d-md-flex">
                  <button
                    class="dropdown-toggle"
                    type="button"
                    id="message"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <i class="lni lni-envelope"></i>
                    <span><?php
                      $stmt = $conn -> prepare("SELECT count(*) as counter FROM messages WHERE view = 0 ");
                      $stmt -> execute();
                      $message = $stmt -> fetch();
                      echo $message['counter'];
                    
                    ?></span>
                  </button>
                  <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="message"
                  >
                  <?php
                            $stmt = $conn -> prepare("SELECT * FROM messages WHERE view = 0 LIMIT 5 ");
                            $stmt -> execute();
                            $messages = $stmt -> fetchAll();
                            foreach($messages as $message){

                           
                          
                          ?>
                    <li>
                      <a href="#0">
                        <div class="image">
                          <img src="assets/images/lead/lead-5.png" alt="" />
                        </div>
                        <div class="content">
                          <h6><?php echo $message['username']; ?></h6>
                          <p><?php echo $message['message']; ?></p>
                          <span>10 mins ago</span>
                        </div>
                      </a>
                    </li>
                    <?php }
                    ?>
                  </ul>
                </div>
                <!-- message end -->
                <!-- filter start -->
                <div class="filter-box ml-15 d-none d-md-flex">
                  <button class="" type="button" id="filter">
                    <i class="lni lni-funnel"></i>
                  </button>
                </div>
                <!-- filter end -->
                <!-- profile start -->
                <div class="profile-box ml-15">
                  <button
                    class="dropdown-toggle bg-transparent border-0"
                    type="button"
                    id="profile"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <div class="profile-info">
                      <div class="info">
                        <h6>John Doe</h6>
                        <div class="image">
                          <img
                            src="assets/images/profile/profile-image.png"
                            alt=""
                          />
                          <span class="status"></span>
                        </div>
                      </div>
                    </div>
                    <i class="lni lni-chevron-down"></i>
                  </button>
                  <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="profile"
                  >
                    <li>
                      <a href="#0">
                        <i class="lni lni-user"></i> View Profile
                      </a>
                    </li>
                    <li>
                      <a href="#0">
                        <i class="lni lni-alarm"></i> Notifications
                      </a>
                    </li>
                    <li>
                      <a href="#0"> <i class="lni lni-inbox"></i> Messages </a>
                    </li>
                    <li>
                      <a href="#0"> <i class="lni lni-cog"></i> Settings </a>
                    </li>
                    <li>
                      <a href="#0"> <i class="lni lni-exit"></i> Sign Out </a>
                    </li>
                  </ul>
                </div>
                <!-- profile end -->
              </div>
            </div>
          </div>
        </div>
      </header>