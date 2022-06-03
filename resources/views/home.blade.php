<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet"> 

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('sass/style.css') }}"> 

    <title>ONLINE STORE</title>
</head>
<body>

    <header>
        <nav>
            <div>
                <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M0 64C0 28.65 28.65 0 64 0H256C291.3 0 320 28.65 320 64V448C320 483.3 291.3 512 256 512H64C28.65 512 0 483.3 0 448V64zM64 232C64 245.3 74.75 256 88 256H232C245.3 256 256 245.3 256 232V152C256 138.7 245.3 128 232 128H88C74.75 128 64 138.7 64 152V232zM80 352C93.25 352 104 341.3 104 328C104 314.7 93.25 304 80 304C66.75 304 56 314.7 56 328C56 341.3 66.75 352 80 352zM80 384C66.75 384 56 394.7 56 408C56 421.3 66.75 432 80 432C93.25 432 104 421.3 104 408C104 394.7 93.25 384 80 384zM160 352C173.3 352 184 341.3 184 328C184 314.7 173.3 304 160 304C146.7 304 136 314.7 136 328C136 341.3 146.7 352 160 352zM160 384C146.7 384 136 394.7 136 408C136 421.3 146.7 432 160 432C173.3 432 184 421.3 184 408C184 394.7 173.3 384 160 384zM240 352C253.3 352 264 341.3 264 328C264 314.7 253.3 304 240 304C226.7 304 216 314.7 216 328C216 341.3 226.7 352 240 352zM240 384C226.7 384 216 394.7 216 408C216 421.3 226.7 432 240 432C253.3 432 264 421.3 264 408C264 394.7 253.3 384 240 384zM128 48C119.2 48 112 55.16 112 64C112 72.84 119.2 80 128 80H192C200.8 80 208 72.84 208 64C208 55.16 200.8 48 192 48H128z"/></svg> <span>Call +555 555 555</span></p>
                <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M368 0C394.5 0 416 21.49 416 48V96H466.7C483.7 96 499.1 102.7 512 114.7L589.3 192C601.3 204 608 220.3 608 237.3V352C625.7 352 640 366.3 640 384C640 401.7 625.7 416 608 416H576C576 469 533 512 480 512C426.1 512 384 469 384 416H256C256 469 213 512 160 512C106.1 512 64 469 64 416H48C21.49 416 0 394.5 0 368V48C0 21.49 21.49 0 48 0H368zM416 160V256H544V237.3L466.7 160H416zM160 368C133.5 368 112 389.5 112 416C112 442.5 133.5 464 160 464C186.5 464 208 442.5 208 416C208 389.5 186.5 368 160 368zM480 464C506.5 464 528 442.5 528 416C528 389.5 506.5 368 480 368C453.5 368 432 389.5 432 416C432 442.5 453.5 464 480 464z"/></svg> <span>FREE DELIVERY AROUND APAPA</span></p>
            </div>
            <div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"/></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
            </div>
        </nav>
        <nav>
            <div>
                <h1>BussinessName</h1>
            </div>
            <div>
                <ul>
                    <li><a href="/">HOME</a></li>
                    <li><a href="/">SHOP</a></li>
                    <li><a href="/">CONTACT</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="header-sm-screen">
        <div>
            <h1>BussinessName</h1>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z"/></svg>
        </div>
    </div>
    
    <main>
        <div class="main">
            <section class="sec-1" style="background-image: url('{{ asset('images/bg.jpg') }}')">
                <div class="sec-1-inner">
                    <div>
                        <h1>ONLINE STORE</h1> 
                        <h2>JASMINE <span>SOLA</span></h2>
                        <span>BOUTIQUE</span>
                        <h3>SAVE UP TO 50%</h3>
                        <p>IF YOU BUY UP TO THREE PRODUCTS</p>
                        <center><button>SHOP NOW</button><button>CONTACT</button></center>
                    </div>
                </div>
            </section>

            <section class="sec-2">
                <div class="sec-2-inner">
                    <div>
                        <img src="{{ asset('images/perfume.png') }}">
                    </div>
                    <p>PERFUMES</p>
                </div>
                <div class="sec-2-inner">
                    <div>
                        <img src="{{ asset('images/shopping-bag.png') }}">
                    </div>
                    <p>BAGS</p>
                </div>
                <div class="sec-2-inner">
                    <div>
                        <img src="{{ asset('images/high-heels.png') }}">
                    </div>
                    <p>SHOES</p>
                </div>
                <div class="sec-2-inner">
                    <div>
                        <img src="{{ asset('images/hair.png') }}">
                    </div>
                    <p>HAIR</p>
                </div>
                <div class="sec-2-inner">
                    <div>
                        <img src="{{ asset('images/vest.png') }}">
                    </div>
                    <p>SINGLETS</p>
                </div>
            </section>
        </div>
    </main>

</body>
</html>