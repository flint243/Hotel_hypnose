class ModalLogin{

    constructor(){
      $(".connexionIci").click(this.show.bind(this));

      $(".closeLogin").click(this.hide.bind(this));

    }

    show(){
      $(".ensembleModal").css({'display':'block', 'top':'150px', 'left':'40%', 'box-shadow': '0px 0px 20px 5px black', 'position':'absolute', 'z-index':'10'});
    }

    hide(){
      $(".ensembleModal").css({'display':'none'});
    }
}
new ModalLogin();