$('.btn-primary').on('click',()=>{
    var sendto = document.querySelector('.sendto').value;
    // var tieude = $("#tieude").val();
    // var content = $('.content').val();
    // alert(sendto);
    // alert(tieude);
    console.log(sendto);
    // $.ajax({
    //     url: "Send_Mail",
    //     method: "GET",
    //     data: {
    //       sendto:sendto,
    //       tieude:tieude,
    //       content:content
    //     },
    //     success: function (data) {
    //       if (data == 'gửi thành công') {
    //         Swal.fire({
    //           position: '',
    //           icon: 'success',
    //           title: 'Your work has been saved',
    //           showConfirmButton: false,
    //           timer: 1500
    //         }).then((result) => {
    //             location.reload();
    //         })
    //       }
    //     }
    //   });
  });
