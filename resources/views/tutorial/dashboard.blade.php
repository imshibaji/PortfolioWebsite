<div class="flex flex-col-reverse lg:flex-row w-full gap-5">

    <div class="w-full lg:w-3/12 order-1 lg:order-none overflow-hidden bg-base-200">
        @include('tutorial.menu')
    </div>

    <div class="w-full lg:w-7/12 order-3 lg:order-none  overflow-hidden bg-white dark:bg-black shadow-sm">
        <div class="p-6 pb-0 bg-white border-b border-gray-200 dark:bg-black dark:border-black">
            <h4>{{$tutorial->title ?? 'Topic Title'}}</h4>
            <div>{!! $tutorial->content ?? '' !!}</div>
        </div>
    </div>
    <div class="w-full lg:w-2/12 order-2 lg:order-none overflow-hidden bg-base-200">
        @include('tutorial.sponsored')
        <div class="hidden lg:block">
            @include('tutorial.teacher')
            <div class="hidden lg:flex divider p-0 m-0"></div>
            @include('tutorial.ads')
        </div>
    </div>
</div>
<script type="text/javascript">
function youtube_parser(url){
    var regExp = /^https?\:\/\/(?:www\.youtube(?:\-nocookie)?\.com\/|m\.youtube\.com\/|youtube\.com\/)?(?:ytscreeningroom\?vi?=|youtu\.be\/|vi?\/|user\/.+\/u\/\w{1,2}\/|embed\/|watch\?(?:.*\&)?vi?=|\&vi?=|\?(?:.*\&)?vi?=)([^#\&\?\n\/<>"']*)/i;
    var match = url.match(regExp);
    return (match && match[1].length==11)? match[1] : false;
}
function embedVideo(){
    var vidurl = document.querySelector('.wp-block-embed__wrapper').innerHTML.trim();
    // console.log(youtube_parser(vidurl));
    var vid = youtube_parser(vidurl);
    document.querySelector('.wp-block-embed__wrapper').innerHTML = '<div class="aspect-w-16 aspect-h-9"><iframe class="w-full h-full object-center object-cover lg:w-full lg:h-full" src="https://www.youtube.com/embed/'+vid+'?&autoplay=1" frameborder="0" allowfullscreen></iframe></div>';
}
embedVideo();
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/styles/monokai-sublime.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', (event) => {
  document.querySelectorAll('pre code').forEach((el) => {
    hljs.highlightElement(el);
  });
});
</script>
