<?php

    
    namespace App\Manager;
    use App\Models\Post;
    use Illuminate\Support\Manager;
    use App\Http\Requests\StorePostRequest;
    use App\Http\Requests\UpdatePostRequest;

    
    class PostManager extends Manager
    {



        /**
         * @param  \App\Http\Requests\UpdatePostRequest  $request
         * @param  \App\Models\Post  $post
         */
        public function build(Post $post, UpdatePostRequest $request)
        {
            $postUpdate = Post::find($post->id);
            $postUpdate->title = $request->input('title');
            $postUpdate->content = $request->input('content');
            $postUpdate->subtitle = $request->input('subtitle');
            $postUpdate->update();
        }

 }

?>