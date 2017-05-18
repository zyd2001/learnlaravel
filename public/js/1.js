$(document).ready(function()
{
  $(".disabled").click(function(event)
  {
    event.preventDefault();
  });
});

var pathname = window.location.pathname;
pathname = pathname.substr(pathname.lastIndexOf('/')+1);
if (!pathname)
{
  $('#home').addClass('active');
}
else
{
  $('#' + pathname).addClass('active');
}