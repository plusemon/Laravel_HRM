@extends('layouts.employee')
  @section('employee')

  <!-- HTML Scrolling-text -->
    <center><h1>Notice</h1></center>
    <div class="notice-a">
      <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"><a href="#">Hower over and hold the mouse marquee stop</a>
      </marquee>
    </div>

@endsection
