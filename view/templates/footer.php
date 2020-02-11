 <footer>
        <div class="footer">
            <ul class="foot ls-none">
                <li><span><i class="fas fa-globe-americas"></i></span> Ecuador</li>
                <li>Guayas</li>
                <li>Guayaquil</li>
                <li><span><i class="fas fa-map-marked-alt" style="margin: 0 10px"></i></span><a href="https://www.google.com/maps/@-2.1965168,-79.9092678,3a,75y,97.69h,82.6t/data=!3m6!1e1!3m4!1sO0eGHQpwTVmo5gvHIXjCYA!2e0!7i13312!8i6656" target="blank">Mapa</a></li>
            </ul>
            <ul class="foot ls-none">
                <li>Datos del dueño</li>
                <li class=""><span style="margin: 0 10px"><i class="fas fa-at"></i></span><a href="mail:dr.lsalinas@hotmail.com">dr.lsalinas@hotmail.com</a></li>
                <li class=""><span style="margin: 0 10px"><i class="fas fa-phone"></i></span><a href="">0995240481</a></li>
            </ul>

        </div>
    </footer>
<script type="text/javascript">
    function cerrar(){
         swal({
                     closeOnClickOutside:false,
                     title: "Aviso !",
                     text: "Esta seguro de cerrar Sesion",
                     icon: "warning",
                     buttons: {
                     si:{ 
                      text:"si",
                      value:"si"
                      },
                      no:{ 
                      text:"no",
                      value:"no"
                      },
                      },
                })
                .then((value) => {
                switch (value) {                                     
                case "si":
                           window.location.href ="login.php";    
                  break;
                case "no":
                               
                  break;
            }
          })

    }

</script>