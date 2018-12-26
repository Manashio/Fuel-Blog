<div class="columns">
    <div class="column is-three-fifths is-offset-one-fifth">
            <h4 class="heading-4">Something on your mind</h4>
            <div class="columns form">
                <div class="column">
                <?php echo Form::open('/posts/edit/ <?php echo $id ; ?>');?>
                
                    <?php echo Form::label('Author Name', 'author');
                    echo Form::input('author', input::post('author', isset($post) ? $post->author : ' ' ));

                    echo Form::label('Username', 'username');
                    echo Form::input('username', input::post('username', isset($post) ? $post->username : ' ' ));

                    echo Form::label('Heading', 'title');                    
                    echo Form::input('title', input::post('title', isset($post) ? $post->title : ' ' ));

                    echo Form::label('Tags', 'tags');
                    echo Form::input('tags' , input::post('tags', isset($post) ? $post->tags : ' ' ), array('placeholder' => '#travel #Technology'));
                ?>
                    <input type="hidden" name="post_id" value="<?php echo $post->id; ?>">
                </div>
                <div class="column">
                    <?php
                        echo Form::label('Blog Content', 'body');
                        echo Form::textarea('body', input::post('body', isset($post) ? $post->body : ' ' ), array('style' => 'width:100%;','rows' => '10'));

                        echo Form::submit('save', 'Save');
                        echo Form::close();
                    ?>

                </div>
            
            </div>

            
    </div>
</div>
