
@extends('layouts.main')

@section('container')
<article>
<h2>{{ $post["title"] }}</h2>
<h5>{{ $post["author"] }}</h5>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas perspiciatis doloremque molestias cumque laborum numquam illo delectus adipisci dignissimos odit, iste ipsam ipsum inventore nemo similique quasi 
    debitis! Odit quibusdam asperiores perferendis sunt? Quas maxime voluptatum similique
     assumenda libero obcaecati voluptate beatae ullam adipisci, possimus cumque veniam 
     veritatis aliquid incidunt nisi consequatur vel. Voluptatem similique ex nesciunt 
     libero tempore inventore nobis omnis ratione ducimus quos ab, quia enim cupiditate blanditiis harum, voluptatibus quidem voluptate molestias nulla. Perferendis illo nulla iure nobis incidunt, autem unde molestiae ea, omnis eum accusantium placeat iste tempora velit dolore sequi recusandae necessitatibus esse nihil reprehenderit.</p>
</article>

<a href="/posts">back to post</a>
    @endsection
