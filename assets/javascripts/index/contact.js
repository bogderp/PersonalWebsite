var Pozderca = Pozderca || {};
Pozderca.Index = Pozderca.Index || {};

Pozderca.Index.contact = function() {

  function initializeContactModal() {
    Pozderca.Modal.initialize();

    var $contactMe = document.getElementsByClassName('contact-me-js')[0];
    $contactMe.onclick = function(e) {
      e.preventDefault();

      Pozderca.Modal.open();
    }
  }

  initializeContactModal();
}
