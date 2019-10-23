<?php    
    function findLinkInText($text) {
        $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";

            if(preg_match($reg_exUrl, $text, $url)) {
                return preg_replace($reg_exUrl, "<a href=".$url[0]." target=_blank>".$url[0]."</a> ", $text);
            } 

            return $text;
}
?>          

<h3> Comentarios </h3>

@if (Auth::user())
@foreach ($collection->comments as $comment)
<div>
        <div class="container">
        <a href="/home/user/{{$comment->user->id}}"><strong>{{$comment->user->name}}</strong></a>
        <div id="comment_content-{{$comment->id}}"><?php echo findLinkInText($comment->content)?></div>
        @endforeach
    
    
@endif