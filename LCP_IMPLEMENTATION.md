// Replace in your layout file:
// @include('include.slider') 
// with:
// @include('include.slider-optimized')

// Or update welcome.blade.php to use:
@section('slider')
@include('include.slider-optimized')
@endsection

// Add this to your layout <head>:
<style>
.banner{position:relative;height:100vh;overflow:hidden}
.lcp-content{position:relative;z-index:2;height:100vh;display:flex;align-items:center;background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5))}
.slider-title{font-size:clamp(2rem,5vw,4rem);margin:0 0 1rem 0;font-weight:bold;line-height:1.2;color:white}
.container{max-width:1200px;margin:0 auto;padding:0 15px}
</style>