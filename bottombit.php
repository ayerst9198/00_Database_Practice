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

        <input class="search" type="text" name="author" size="40" value="" required placeholder="Title..." />

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

        Rating Search<br />


        </div> <!-- / side bar -->

<div class="box footer">
            CC yourname 20XX
        </div>    <!-- / footer -->
    
    </div>  <!-- / wrapper  -->
    
</body>        
