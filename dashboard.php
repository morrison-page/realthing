<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head -->
   <?php require 'includes/head.php'; ?>
</head>
<body>
    <!-- Navbar -->
    <?php require 'includes/nav.php'; ?>

    <!-- Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="card" style="margin-top: 12px;">
                        <?php echo '<h1 style="text-align:center;">The current location selected is: ' . 'London' . '</h1>'?>
                        <div id="location"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="card" style="margin-top: 12px;">
                        <!-- Forecast Graph -->
                        <?php require 'includes/charts/test.php'; ?>                     
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="margin-top: 12px;">
                    <!-- Pollution Graph -->
                    <?php require 'includes/charts/polutionData.php'; ?>
                </div>
            </div>
        </div>
        
    <!-- Footer -->
    <?php require 'includes/footer.php'; ?>
    <!-- JS Bootstrap -->
    <?php require 'includes/bootstrapjs.php'; ?>
</body>
</html>



