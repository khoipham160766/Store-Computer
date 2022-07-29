//  --------button quantity
$('input.input-qty').each(function() {
    var $this = $(this),
      qty = $this.parent().find('.is-form'),
      min = Number($this.attr('min')),
      max = Number($this.attr('max'))
    if (min == 0) {
      var d = 0
    } else d = min
    $(qty).on('click', function() {
      if ($(this).hasClass('minus')) {
        if (d > min) d += -1
      } else if ($(this).hasClass('plus')) {
        var x = Number($this.val()) + 1
        if (x <= max) d += 1
      }
      $this.attr('value', d).val(d)
    })
  })
// ---------range slide
  let min = 0;
  let max = 100;
  
  const calcLeftPosition = value => 100 / (100 - 1) *  (value - 0);
  
  $('#rangeMin').on('input', function(e) {
    const newValue = parseInt(e.target.value);
    if (newValue > max) return;
    min = newValue;
    $('#thumbMin').css('left', calcLeftPosition(newValue) + '%');
    $('#min').html((500000*newValue/1).toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
    $('#line').css({
      'left': calcLeftPosition(newValue) + '%',
      'right': (100 - calcLeftPosition(max)) + '%'
    });
  });
  
  $('#rangeMax').on('input', function(e) {
    const newValue = parseInt(e.target.value);
    if (newValue < min) return;
    max = newValue;
    $('#thumbMax').css('left', calcLeftPosition(newValue) + '%');
    $('#max').html((500000*newValue).toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
    $('#line').css({
      'left': calcLeftPosition(min) + '%',
      'right': (100 - calcLeftPosition(newValue)) + '%'
    });
  });

// --------------select box
  $(".custom-select").each(function() {
    var classes = $(this).attr("class"),
        id      = $(this).attr("id"),
        name    = $(this).attr("name");
    var template =  '<div class="' + classes + '">';
        template += '<span class="custom-select-trigger">' + $(this).attr("placeholder") + '</span>';
        template += '<div class="custom-options">';
        $(this).find("option").each(function() {
          template += '<span class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
        });
    template += '</div></div>';
    
    $(this).wrap('<div class="custom-select-wrapper"></div>');
    $(this).hide();
    $(this).after(template);
  });
  $(".custom-option:first-of-type").hover(function() {
    $(this).parents(".custom-options").addClass("option-hover");
  }, function() {
    $(this).parents(".custom-options").removeClass("option-hover");
  });
  $(".custom-select-trigger").on("click", function() {
    $('html').one('click',function() {
      $(".custom-select").removeClass("opened");
    });
    $(this).parents(".custom-select").toggleClass("opened");
    event.stopPropagation();
  });
  $(".custom-option").on("click", function() {
    $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
    $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
    $(this).addClass("selection");
    $(this).parents(".custom-select").removeClass("opened");
    $(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());
  });
  // --------change profile user
  function changeProfile(){
    let formChangeProfile = document.getElementById("form-change-info");
    let formChangePassword = document.getElementById("form-change-password");
    let formChangeAvatar= document.getElementById("form-change-avatar");
    formChangeProfile.style.display="block";
    formChangeAvatar.style.display="none";
    formChangePassword.style.display="none";
  }
  function exitChangeProfile(){
    let form = document.getElementById("form-change-info");
    form.style.display="none";
  }
  // --------check change info user
  function checkChangeInfo(){
    let Name = document.getElementById("name").value;
    let Phone = document.getElementById("phone-number").value;
    let regexPhone =/((09|03|07|08|05)+([0-9]{8})\b)/g;
    if (Name === ""){
      document.getElementById("error-change-info").innerHTML="Tên không được để trống.";
      return false;
    }else if(Phone === ""){
      document.getElementById("error-change-info").innerHTML="Số điện thoại không được để trống";
      return false;
    }else if(regexPhone.test(Phone) == false){
      document.getElementById("error-change-info").innerHTML="Số điện thoại không hợp lệ.";
      return false;
    }
    return true;
  }
  // -------change password user
  function changePassword(){
    let formChangeProfile = document.getElementById("form-change-info");
    let formChangePassword = document.getElementById("form-change-password");
    let formChangeAvatar= document.getElementById("form-change-avatar");
    formChangeProfile.style.display="none";
    formChangeAvatar.style.display="none";
    formChangePassword.style.display="block";
  }
  function exitChangePassword(){
    let form = document.getElementById("form-change-password");
    form.style.display="none";
  }
  // --------change status password
  function viewOldPassword(){
    let type = (document.querySelector("#old-password")).getAttribute('type');
    document.querySelector("#old-password").setAttribute('type', type === 'password' ? 'text' : 'password');
  }
  function viewNewPassword(){
    let type = (document.querySelector("#new-password")).getAttribute('type');
    document.querySelector("#new-password").setAttribute('type', type === 'password' ? 'text' : 'password');
  }
  function viewNewPasswordAgain(){
    let type = (document.querySelector("#new-password-again")).getAttribute('type');
    document.querySelector("#new-password-again").setAttribute('type', type === 'password' ? 'text' : 'password');
  }
  // -------check change password
  function checkChangePassword(){
    let oldPassword = document.getElementById("old-password").value;
    let newPassWord = document.getElementById("new-password").value;
    let newPassWordAgain = document.getElementById("new-password-again").value;
    if (oldPassword === "")
    {
      document.getElementById("error-change-password").innerHTML="Mật khẩu cũ không được để trống";
      return false;
    }
    else if (newPassWord === "")
    {
      document.getElementById("error-change-password").innerHTML="Mật khẩu mới không được để trống";
      return false;
    }
    else if (newPassWordAgain === "")
    {
      document.getElementById("error-change-password").innerHTML="Nhập lại mật khẩu mới.";
      return false;
    }
    else if(newPassWord !== newPassWordAgain)
    {
      document.getElementById("error-change-password").innerHTML="Mật khẩu mới và nhập lại không khớp";
      return false;
    }
    return true;
  }
  // -------change avatar
  function changeAvatar(){
    // let blur = document.getElementById("main-body");
    let formChangeProfile = document.getElementById("form-change-info");
    let formChangePassword = document.getElementById("form-change-password");
    let formChangeAvatar= document.getElementById("form-change-avatar");
    formChangeProfile.style.display="none";
    formChangeAvatar.style.display="block";
    formChangePassword.style.display="none";
    // blur.classList.toggle("active-body");
  }
  function exitChangeAvatar(){
    let form = document.getElementById("form-change-avatar");
    form.style.display="none";
  }
  function changeImg(){
    var tmppath = URL.createObjectURL(document.getElementById("file").files[0]);    
    document.querySelector("#img-avatar").setAttribute('src', tmppath);
  }

  // --------- total money
  function addquantity(id,max){
    var price=Number((document.getElementById("price-cart-" + id).textContent).replace(/\./g,""));
    var quantity=Number(document.getElementById("quantity-" + id).value ) + 1;
    var total=(price * quantity).toLocaleString();
    if(quantity > max) total=(price * max).toLocaleString();
    document.getElementById("title-total-" + id).innerHTML=total;
  }
  function subquantity(id){
    var price=Number((document.getElementById("price-cart-" + id).textContent).replace(/\./g,""));
    var quantity=Number(document.getElementById("quantity-" + id).value ) - 1;
    var total=(price * quantity).toLocaleString();
    if(total <= 0) total=price.toLocaleString();
    document.getElementById("title-total-" + id).innerHTML=total;
  }
  // ---------- change address
  $("#change-address").on("click",function(){
    document.getElementById("form-change-address").style.display = "block";
  })
  $("#exit-form-change-address").on("click",function(){
    document.getElementById("form-change-address").style.display = "none";
  })
  $("#btn-change-address").on("click", function(){
    let nameBuyer = document.getElementById("new-name-buyer").value;
    let phoneBuyer = document.getElementById("new-phone-buyer").value;
    let addressBuyer = document.getElementById("new-address-buyer").value;
    document.getElementById("name-buyer").textContent = nameBuyer;
    document.getElementById("phone-buyer").textContent = phoneBuyer;
    document.getElementById("address-buyer").textContent = addressBuyer;
    document.getElementById("info-order").value = nameBuyer + " - " + phoneBuyer + " - " + addressBuyer;
    document.getElementById("form-change-address").style.display = "none";
  })