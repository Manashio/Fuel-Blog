<div class="columns">
    <div class="column is-three-fifths is-offset-one-fifth">
                <div class="card">
                <div class="card-image">
                    <figure class="image">
                        <img src="../../assets/img/blog-img-1.jpeg" alt="" class="img-placeholder">
                    </figure>
                    <div class="card-author"></div>
                    <div class="author-name">
                        <p class=" subtitle is-5 has-text-white"><?php echo $post->author;?> <br>
                            <a href="" class="subtitle is-7 has-text-white text-bold"> <i class="fab fa-twitter"></i> <?php echo $post->username;?></a>
                        </p>
                    </div>
                </div>
            <div class="card-body">
                <div class="card-content">
                    <div class="card-heading">
                        <h3 class="title is-4"><?php echo $post->title;?></h3>
                        <p class="title is-7 has-text-grey-light info"> 
                            <time datetime="<?php echo $post->created_at;?>"> <i> <?php echo date('h.i a , d M,y', strtotime($post->created_at)) ;?></i> </time>
                        </p>
                    </div>
                    <p><?php echo $post->body;?> </p>

                </div>
                <div class="card-content">
                    <a class="link btn" href="/posts/edit/<?php echo $post->id?>">Edit </a>
                    <a class="link btn" href="/posts/delete/<?php echo $post->id?>">Delete </a>
                </div>
                <div class="card-content">
                    <a href="http://t.co" class="fa-link"><i class="far fa-thumbs-up"></i> </a>
                    <a href="http://t.co" class="fa-link"><i class="fab fa-twitter"></i> </a>
                    <a href="http://t.co" class="fa-link"><i class="fas fa-share-alt"></i> </a>
                </div>
            </div>
        </div>
</div>
</div>

