$(document).ready(function() {
    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    $.ajax({
        url: '/back/danhmuc.php',
        type: 'get',
        dataType: 'json',
        success: function(data) {
            let normalContent = '';
            let vipContent = '';

            data.forEach(function(item) {
                var giagd = parseInt(item.giagd);
                let content = `<div class="col">
                                    <div class="card">
                                        <img src="${item.img}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">${item.tengd}</h5>
                                            <p class="card-text">+ GiĂ¡: ${numberWithCommas(giagd)}Ä‘ / 1 thĂ¡ng</p>
                                            <a href="/tao-web-${item.id}" class="btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                                    <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                                </svg> 
                                                Táº¡o Ngay
                                            </a>
                                        </div>
                                    </div>
                                </div>`;
                if (item.loai === 'thuong') {
                    normalContent += content;
                } else {
                    vipContent += content;
                }
            });

            $('#normalContent').html(normalContent);
            $('#vipContent').html(vipContent);
        },
        error: function(error) {
            console.log(error);
        }
    });

    $("#showNormal").click(function(){
        $("#normalContent").show();
        $("#vipContent").hide();
    });

    $("#showVip").click(function(){
        $("#normalContent").hide();
        $("#vipContent").show();
    });
});
