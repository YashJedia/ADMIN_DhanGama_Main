<?php include "include/header.php" ?>
<div class="wrapper">
  <!-- Navbar -->
  <?php include "include/navbar.php" ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include "include/sidebar.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0">Dashboard </h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DASHBOARD</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      
        <!-- Info boxes -->
        <div class="row">
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box bg-info">
              <span class="info-box-icon"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">New User</span>
                <span class="info-box-number"><?= $newUser ?></span>

                
                <span class="progress-description">
                  
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box bg-success">
              <span class="info-box-icon">
                <i class="fa fa-sort-amount-down"></i>
              </span>

              <div class="info-box-content">
                <span class="info-box-text">All User</span>
                <span class="info-box-number"><?= $totalUsers ?></span>

                <span class="progress-description">
                  
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box bg-warning">
              <span class="info-box-icon"><i class="fa fa-sort-amount-down"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Debit</span>
                <span class="info-box-number"><?= ($totalDebit->total)?$totalDebit->total:"0.00" ?></span>

                <span class="progress-description">
                  
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box bg-info">
              <span class="info-box-icon"><i class="fa fa-sort-amount-down"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total<br>Confirm Deposit</span>
                <span class="info-box-number"><?= ($totalConfirmDeposit->total)?$totalConfirmDeposit->total:"0.00" ?></span>
                  
                <span class="progress-description">
                  
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box bg-success">
              <span class="info-box-icon"><i class="fa fa-sort-amount-down"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Today<br> Confirm Deposit</span>
                <span class="info-box-number"><?= ($todayConfirmDeposit->total)?$todayConfirmDeposit->total:"0.00" ?></span>

                <span class="progress-description">
                  
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box bg-warning">
              <span class="info-box-icon"><i class="fa fa-sort-amount-down"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Today Withdrawal <br>Request</span>
                <span class="info-box-number"><?= ($todayWithdrawalRequest->total)? $todayWithdrawalRequest->total:"0" ?></span>

                <span class="progress-description">
                  
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          
              <!-- /.info-box-content -->
          <!-- /.col -->
          
        </div>


        <div class="row">
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box bg-info">
              <span class="info-box-icon"><i class="fa fa-sort-amount-down"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Today Confirm <br>Withdrawal Request</span>
                <span class="info-box-number"><?= ($todayConfirmWithdrawalRequest->total)? $todayConfirmWithdrawalRequest->total:"0"?></span>
                  
                <span class="progress-description">
                  
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box bg-success">
              <span class="info-box-icon"><i class="fa fa-sort-amount-down"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total<br> Withdrawal Request</span>
                <span class="info-box-number"><?= ($totalWithdrawalRequest->total)? $totalWithdrawalRequest->total:"0" ?></span>

                <span class="progress-description">
                  
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box bg-warning">
              <span class="info-box-icon"><i class="fa fa-sort-amount-down"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total <br>Withdrawal Request Confirm</span>
                <span class="info-box-number"><?= ($totalConfirmWithdrawalRequest->total)? $totalConfirmWithdrawalRequest->total : "0"?></span>

                <span class="progress-description">
                  
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          
              <!-- /.info-box-content -->
          <!-- /.col -->
          
        </div>
        

        <!-- Home Message Edit Section -->
        <div class="card mt-4">
          <div class="card-header bg-primary text-white">Edit Home Message (Hovering Line)</div>
          <div class="card-body">
            <form id="homeMessageForm" method="post">
              <div class="form-group">
                <label for="homeMessage">Home Message</label>
                <textarea class="form-control" id="homeMessage" name="homeMessage" rows="2"></textarea>
              </div>
              <button type="submit" class="btn btn-success">Save</button>
              <span id="homeMessageStatus" class="ml-2"></span>
            </form>
          </div>
        </div>
        <script>
        let lastSavedMessage = '';
        // Fetch current message
        fetch('api/home-message')
          .then(res => res.json())
          .then(data => {
            lastSavedMessage = data.message || '';
            document.getElementById('homeMessage').value = lastSavedMessage;
          });

        // Clear status when editing
        document.getElementById('homeMessage').addEventListener('input', function() {
          document.getElementById('homeMessageStatus').textContent = '';
        });

        // Handle form submit
        const form = document.getElementById('homeMessageForm');
        form.addEventListener('submit', function(e) {
          e.preventDefault();
          const msg = document.getElementById('homeMessage').value;
          if (msg === lastSavedMessage) {
            document.getElementById('homeMessageStatus').textContent = '';
            return;
          }
          fetch('api/home-message', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'message=' + encodeURIComponent(msg)
          })
          .then(res => res.json())
          .then(data => {
            if (data.status === 'success') {
              lastSavedMessage = msg;
              document.getElementById('homeMessageStatus').textContent = 'Saved!';
            } else {
              document.getElementById('homeMessageStatus').textContent = 'Error saving';
            }
          });
        });
        </script>

      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <?php include "include/footer.php" ?>

  </body>
</html>