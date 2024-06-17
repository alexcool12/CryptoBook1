
       
        <div class="service_content">
            <div class="container">
                <div class="row">
                     <?php 
                       
                        $sql = 'SELECT * FROM test;';
                        $result = mysqli_query($link, $sql);
                        
                        while ($row = mysqli_fetch_array($result)) 
                        {
                    ?>
                        <div class="col-sm-6 col-md-4"  onclick="window.location = 'start_test?test_id=<?php echo $row['id'] ?>'">
                            <div class="features-box" >
                                <h3 class="features-title"><?php echo $row['name']; ?></h3>
                                <p><?php echo mb_substr($row['description'], 0, 100); ?>...</p>
                            </div>
                        </div>
                <?php } ?>    
                </div>
            </div>
        </div>
        


        <script>
            window.change_color = () => {
                document.getElementsByTagName('nav')[0].style.backgroundColor = "#25258E";
            };
            window.pull_functions.push(window.change_color);
        </script>
