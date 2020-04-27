<style>
    a.xx{
      pointer-events: none;
      cursor: default;
    }
    </style>
    <body onload="see()">
        @if($post->category_id==6)
        <script>
            function see(){
                document.getElementById("Vehicles").click();
                document.getElementById("cars").click();
            }
        </script>
        <p id="Vehicles" onclick="fun(this.id)"></p>
        <p id="cars" onclick="view(this.id)"></p>
    
        @elseif($post->category_id==8)
        <script>
            function see(){
                document.getElementById("Vehicles").click();
                document.getElementById("bikes").click();
            }
        </script>
        <p id="Vehicles" onclick="fun(this.id)"></p>
        <p id="bikes" onclick="view(this.id)"></p>
    
        @elseif($post->category_id==9)
        <script>
            function see(){
                document.getElementById("Vehicles").click();
                document.getElementById("bus").click();
            }
        </script>
        <p id="Vehicles" onclick="fun(this.id)"></p>
        <p id="bus" onclick="view(this.id)"></p>
    
        @elseif($post->category_id==2)
        <script>
            function see(){
                document.getElementById("Property").click();
                document.getElementById("homes").click();
            }
        </script>
        <p id="Property" onclick="fun(this.id)"></p>
        <p id="homes" onclick="view(this.id)"></p>
    
        @elseif($post->category_id==10)
        <script>
            function see(){
                document.getElementById("Property").click();
                document.getElementById("hostels").click();
            }
        </script>
        <p id="Property" onclick="fun(this.id)"></p>
        <p id="hostels" onclick="view(this.id)"></p>
    
        @elseif($post->category_id==3)
        <script>
            function see(){
                document.getElementById("Property").click();
                document.getElementById("shops").click();
            }
        </script>
        <p id="Property" onclick="fun(this.id)"></p>
        <p id="shops" onclick="view(this.id)"></p>
    
        @elseif($post->category_id==11||$post->category_id==12||$post->category_id==13)
        <script>
            function see(){
                document.getElementById("Services").click();
                document.getElementById("cat").click();
            }
        </script>
        <p id="Services" onclick="fun(this.id)"></p>
        <p id="cat" onclick="view(this.id)"></p>
    
        @endif
    </body>