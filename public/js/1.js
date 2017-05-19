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

$('.btn-primary').css({cursor : 'pointer'});

function post(url) 
{
  var form = document.createElement('form');
  form.method = "POST";
  form.action = url;

  var csrf = document.createElement('input');
  csrf.setAttribute('type', 'hidden');
  csrf.setAttribute('name', '_token');
  csrf.setAttribute('value', $('meta[name="csrf"]').attr('content'));
  form.appendChild(csrf);
  // form.target = "_self";
  document.body.appendChild(form);
  form.submit();
  document.body.removeChild(form);
}