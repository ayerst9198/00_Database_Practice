<div class="box side">

        <h2>Search | <a class="side" href="show_all.php">Show All</a></h2>

        <i>Type part of the title / author name if desired</i>

        <hr/>

        <!-- Start of Title Search -->

        <form method="post" action="title_search.php" enctype="multipart/form-data" >

        <input class="search" type="text" name="title" size="40" value="" required placeholder="Title..." />

        <input class="submit" type ="submit" name="find_title" value="Search" />
        
        </form>

        <!-- end of title search -->

        <hr/>

        <!-- start of author search !-->

        <form method="post" action="author_search.php" enctype="multipart/form-data" >

        <input class="search" type="text" name="author" size="40" value="" required placeholder="Author..." />

        <input class="submit" type ="submit" name="find_author" value="Search" />
        
        </form>
        <!-- end of author search !-->

        <hr/>

        <!-- start of genre search !-->

        <form method="post" action="genre_search.php" enctype="multipart/form-data" >

        <input class="search" type="text" name="genre" size="40" value="" required placeholder="Genre..." />

        <input class="submit" type ="submit" name="find_genre" value="Search" />
        
        </form>
        <!-- end of genre search !-->
        <hr />

        <!-- start of rating form !-->

        <form method="post" action="rating_search.php" enctype="multipart/form-data">
        
            <select class="half_width" name="amount">
                <option value="exactly" selected>Exactly...</option>
                <option value="more">At least...</option>
                <option value="less">At most...</option>
            </select>

            <select class="half_width" name="stars">
                <option value=1>&#9733;</option>
                <option value=2>&#9733;&#9733;</option>
                <option value=3>&#9733;&#9733;&#9733;</option>
                <option value=4>&#9733;&#9733;&#9733;&#9733;</option>
                <option value=5>&#9733;&#9733;&#9733;&#9733;&#9733;</option>
            </select>

            <input type="submit" class="submit" name="find_rating" value="Search" />
            
            
            
        </form>

        <!-- end of rating form !-->


        </div> <!-- / side bar -->

<div class="box footer">
            CC yourname 20XX
        </div>    <!-- / footer -->
    
    </div>  <!-- / wrapper  -->
    
</body>        
