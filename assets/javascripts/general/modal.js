var Pozderca = Pozderca || {};
Pozderca.Modal = Pozderca.Modal || {};
var $modal = document.getElementsByClassName('modal-js')[0];
var $body = document.getElementsByTagName("body")[0];

Pozderca.Modal.close = function($overide) {
  $body.classList.remove('no-scroll');

  if (typeof $overide !== 'undefined') {
    $overide.classList.remove('active');
  } else {
    $modal.classList.remove('active');
  }
}

Pozderca.Modal.open = function($overide) {
  $body.classList.add('no-scroll');

  if (typeof $overide !== 'undefined') {
    $overide.classList.add('active');
  } else {
    $modal.classList.add('active');
  }
}

Pozderca.Modal.initialize = function() {
  $modal.addEventListener('click', function(e) {
    if (e.target !== this) {
      return;
    } else {
      e.preventDefault();
      Pozderca.Modal.close();
    }
  });

  var $modalToggle = document.getElementsByClassName('modal-toggle-js')[0];
  $modalToggle.addEventListener('click', function(e) {
    e.preventDefault();

    Pozderca.Modal.close();
  });
}
