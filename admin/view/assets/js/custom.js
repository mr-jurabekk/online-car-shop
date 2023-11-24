
$(document).ready(function () {
    $('.remove').on('click', function (e) {
        let answer = confirm("Ushbu funksiyani rostdan o`chirmoqchimisiz?")
        if(!answer){
            e.preventDefault();
            return false;
        }
    })

    // let previewImages = document.querySelectorAll('.preview');
    //
    // if(previewImages){
    //     for(let i = 0; i < previewImages.length; i++){
    //
    //         previewImages[i].onchange = evt => {
    //             console.log(this,this.parentNode);
    //             let blah = this.parentNode.querySelector('img');
    //             const [file] = this.files
    //             if(file){
    //                 blah.src = URL.createObjectURL(file)
    //             }
    //         }
    //     }
    // }

    $(document).on('change','.preview', function () {
        const [file] = this.files;
        if(file){
            $(this).parent().find('img').attr('src',URL.createObjectURL(file));
        }
    })

})

