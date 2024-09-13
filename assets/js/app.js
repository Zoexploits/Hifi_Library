

function conFirmDelete(){

    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
      }).then((result) => {
        if (result.isConfirmed) {

          const form =document.getElementById('myForm')

            form.submit();
        
        }
      });
}










  // document.querySelector('.menu-bars').onclick = () => {
  //   document.querySelector('.nav-ul').classList.toggle('active');
  //   document.querySelector('.menu-overlay').classList.toggle('active');
  //   document.querySelector('.menu-bars').classList.toggle('active');
  // };
  
  // document.querySelector('.menu-overlay').onclick = () => {
  //   document.querySelector('.menu-overlay').classList.remove('active');
  //   document.querySelector('.nav-ul').classList.remove('active');
  //   document.querySelector('.menu-bars').classList.remove('active'); // Remove 'active' class for the bars
  // };




