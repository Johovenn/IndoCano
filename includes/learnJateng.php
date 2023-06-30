<body>
    <nav>
        <div class="greetings">
            <img src="../../../images/logo indocano 2.png" alt="">
        </div>

        <div class="navigation">
            <div class="nav-logo">
                <a href="../homePage.php"><ion-icon name="home-outline"></ion-icon></a>
                <span class="text">Home</span>
            </div>

            <div class="nav-logo">
                <a href="../quiz/quizPage.php"><ion-icon name="barbell-outline"></ion-icon></a>
                <span class="text">Train</span>
            </div>

            <div class="nav-logo active">
                <a href="../learn/learnPage.php"><ion-icon name="book-outline"></ion-icon></a>
                <span class="text">Learn</span>
            </div>

            <div class="nav-logo">
                <a href="../account/editProfile.php"><ion-icon name="person-outline"></ion-icon></a>
                <span class="text">Account</span>
            </div>  
        </div>

        <div class="change-province-button">
            <div class="current-province">
                <img src="<?php if($_SESSION["provinceid"] == 1){ echo "../../../images/Provinsi Bali.png";} else{echo "../../../images/Jateng-Logo.png";} ?>" alt="">
            </div>
            <div class="dropdown-container">
                <div class="enrolled-province">
                    <div class="province-image">
                        <img src="<?php if($_SESSION["provinceid"] == 1){ echo "../../../images/Provinsi Bali.png";} else{echo "../../../images/Jateng-Logo.png";} ?>" alt="">
                    </div>
                    <div class="province-name"><?php if($_SESSION["provinceid"] == 1){ echo "Bali";} else{echo "Jawa Tengah";} ?></div>
                </div>
                <a href="../selection/selectionPage.php">Switch province</a>
            </div>
        </div>
    </nav>
    
    <h1>Provinsi Jawa Tengah</h1>

    <div class="logoProv">
        <img src="../../../images/Jateng-Logo.png" alt="">
        <div class="general">
            <p>
                <b>Pulau:</b><span id="span1">Pulau Jawa</span><br>
                <b>Guberner:</b><span id="span2">Ganjar Pranowo</span><br>
                <b>Ibu Kota:</b><span id="span4">Semarang</span><br>
                <b>Agama Mayoritas:</b><span id="span5">Islam</span><br>
                <b>Zona Waktu:</b><span id="span6">Waktu Indonesia bagian Barat (WIB)</span> <br>
                <b>Titik Tertinggi:</b><span id="span7">Gunung Slamet</span>
            </p>
            
        </div>
    </div>

    <div class="accordion">
        <!-- Makanan Khas -->
        <div class="test">
          <input type="checkbox" name="example_accordion" id="section1" class="accordion__input">
          <label for="section1" class="accordion__label">Section #1: Makanan Khas</label>
          <div class="accordion__content">
                <div class="guide">
                    <div class="current-province">
                        <ion-icon name="information-circle-outline" class="ikon"></ion-icon>
                    </div>
                    <div class="dropdown-container" id="guide2">
                        <p>Try clicking the cylinder under !</p>
                    </div>
                </div>

                <div class="content-makanan">
                    <div class="container-makanan">
                            <div class="content-slide">
                                <input type="radio" name="select" id="slide1" checked>
                                <input type="radio" name="select" id="slide2">
                                <input type="radio" name="select" id="slide3">
                                <input type="radio" name="select" id="slide4">
                                <input type="radio" name="select" id="slide5">
                                <input type="radio" name="select" id="slide6">
                                <input type="radio" name="select" id="slide7">
                                <input type="checkbox" id="slideImg">
            
                                <div class="slider-makanan">
                                    <label for="slide1" class="slide slide1"></label>
                                    <label for="slide2" class="slide slide2"></label>
                                    <label for="slide3" class="slide slide3"></label>
                                    <label for="slide4" class="slide slide4"></label>
                                    <label for="slide5" class="slide slide5"></label>
                                    <label for="slide6" class="slide slide6"></label>
                                    <label for="slide7" class="slide slide7"></label>
                                </div>
            
                                <div class="inner">
                                    <label for="slideImg" class="gmbr">
                                        <img class="img1" src="../../../images/Jateng-TempeMendoan.jpeg">
                                    </label>
                                    <div class="konten konten1">
                                        <div class="jdul">Tempe Mendoan</div>
                                        <div class="isip">
                                            Tempe mendoan merupakan salah satu sajian asal Nusantara, khususnya daerah Banyumas, Jawa Tengah. 
                                            Mendoan adalah sajian tempe berbentuk kotak yang diiris tipis yang dibalut dengan tepung encer dengan 
                                            tambahan irisan daun bawang di dalamnya. Mendoan dimasak dengan cara digoreng dalam minyak panas selama
                                            beberapa menit
                                        </div>
                                        <a href="https://www.kompas.com/food/read/2020/09/08/102000475/sejarah-tempe-mendoan-gorengan-setengah-matang-asal-banyumas"><button>Read More</button></a>
                                    </div>
                                </div>
            
                                <div class="inner">
                                    <label for="slideImg" class="gmbr">
                                        <img class="img2" src="../../../images/Jateng-Wedang.jpeg">
                                    </label>
                                    <div class="konten konten2">
                                        <div class="jdul">Wedang Ronde</div>
                                        <div class="isip">
                                            Salatiga memiliki Ronde, namun masyarakat biasa menyebutnya wedang ronde. Dalam bahasa Jawa, wedang 
                                            berarti minuman. Minuman ini memiliki fungsi untuk menghangatkan tubuh karena jahe merupakan salah satu
                                            bahan baku pembuatannya. Ronde terbuat dari tepung ketan putih yang dibentuk bulat dan berisi kacang. 
                                            Wedang ronde umumnya dilengkapi dengan kolang kaling, agar-agar, kacang tanah tanpa kulit, dan jahe.
                                        </div>
                                        <a href="https://1001indonesia.net/wedang-ronde-multikulturalisme-dalam-minuman-tradisional-khas-salatiga/#:~:text=Bola-bola%20ketan%20%28ronde%29%20selalu%20berisi%20wijen%20hitam%20yang,wedang%20ronde%20lebih%20ramai%2C%20ada%20agar-agar%20dan%20kolang-kaling."><button>Read More</button></a>
                                    </div>
                                </div>
            
                                <div class="inner">
                                    <label for="slideImg" class="gmbr">
                                        <img class="img3" src="../../../images/Jateng-SotoKudus.jpeg">
                                    </label>
                                    <div class="konten konten3">
                                        <div class="jdul">Soto Kudus</div>
                                        <div class="isip">
                                            Makanan khas daerah Jawa Tengah ini sesuai namanya, Soto Kudus adalah makanan khas Kota Kudus. Sekarang
                                            Soto Kudus ada banyak versi, ada yang pakai daging sapi dan daging ayam. Ciri khas dari soto ini adalah
                                            kuahnya yang bening segar dengan jahe, kunyit, dan daun salam sebagai salah satu bumbu pelengkapnya. 
                                            Pada resep soto Kudus ini juga menggunakan suwiran ayam, taoge, telur rebus, dan bawang goreng sebagai 
                                            pelengkapnya.
                                        </div>
                                        <a href="https://resepkoki.id/resep/resep-soto-kudus/"><button>Read More</button></a>
                                    </div>
                                </div>

                                <div class="inner">
                                    <label for="slideImg" class="gmbr">
                                        <img class="img4" src="../../../images/Jateng-NasiLiwet.jpeg">
                                    </label>
                                    <div class="konten konten4">
                                        <div class="jdul">Nasi Liwet</div>
                                        <div class="isip">
                                            Nasi yang gurih dan harum menjadi ciri khas kuliner tradisional ini. Rasa gurih berasal dari santan 
                                            kelapa yang dimasak bersama beras, sementara wanginya dari daun pandan, ditambah daun salam dan batang 
                                            serai, serta berbagai macam bumbu juga rempah-rempah lainnya. <br>
                                            Dalam satu paket nasi liwet Solo biasanya terdiri dari beberapa bagian, antara lain nasi gurih, suwiran
                                            ayam ungkep, sayur labu siam, telur rebus, sambal goreng ati, tempe dan tahu bacem, serta areh atau 
                                            hasil rebusan santan yang dimasak hingga mengental.
                                        </div>
                                        <a href="https://www.gotravelly.com/blog/nasi-liwet-enak-di-jawa-tengah/"><button>Read More</button></a>
                                    </div>
                                </div>

                                <div class="inner">
                                    <label for="slideImg" class="gmbr">
                                        <img class="img5" src="../../../images/Jateng-TahuPetis.jpeg">
                                    </label>
                                    <div class="konten konten5">
                                        <div class="jdul">Tahu Petis</div>
                                        <div class="isip">
                                            Tahu Petis, makanan khas Kota Semarang terbuat dari tahu pong yang digoreng kering dan renyah yang diisi
                                            dengan petis udang yang telah diracik dengan bumbu special sehingga beraroma harum, gurih dan manis. <br>
                                            Tahu Petis terbuat dari tahu putih yang digoreng sampai warna kecokelatan tanpa dibumbui atau dibumbui 
                                            dengan larutan garam dan bawang putih saja. Sedangkan petisnya berasa manis agak sedikit asin. Agar 
                                            menggugah selera tahu petis biasanya dimakan dengan cabai rawit.
                                        </div>
                                        <a href="https://www.idntimes.com/food/recipe/prila-arofani/resep-tahu-petis-khas-semarang"><button>Read More</button></a>
                                    </div>
                                </div>

                                <div class="inner">
                                    <label for="slideImg" class="gmbr">
                                        <img class="img6" src="../../../images/Jateng-NasiGandul.jpeg">
                                    </label>
                                    <div class="konten konten6">
                                        <div class="jdul">Nasi Gandul</div>
                                        <div class="isip">
                                            Nasi gandul adalah makanan khas Pati, Jawa Tengah yang telah melegenda sejak tahun 1950-an. Nasi gandul
                                            merupakan makanan berupa sajian nasi dengan daging sapi atau empal yang diberi kuah berempah berwarna 
                                            kecoklatan dengan rasa gurih manis langsung diatas nasinya.
                                        </div>
                                        <a href="https://id.theasianparent.com/nasi-gandul"><button>Read More</button></a>
                                    </div>
                                </div>

                                <div class="inner">
                                    <label for="slideImg" class="gmbr">
                                        <img class="img7" src="../../../images/Jateng-DawetIreng.jpeg">
                                    </label>
                                    <div class="konten konten7">
                                        <div class="jdul">Dawet Ireng</div>
                                        <div class="isip">
                                            Dawet Ireng adalah jenis Es Dawet yang berasal dari daerah Butuh, Purworejo, Jawa Tengah. Kata ireng 
                                            dari bahasa Jawa berarti hitam. Butiran dawet berwarna hitam, karena diperoleh dari abu bakar jerami 
                                            yang dicampur dengan air sehingga menghasilkan air berwarna hitam. Air ini kemudian digunakan sebagai 
                                            pewarna dawet. <br>
                                            Tidak terlalu berbeda dengan cendol lainnya, minuman ini berbahan utama tepung beras dengan kuah dari
                                            santan kelapa dengan pemanis gula jawa dan penyedap daun pandan. Terkadang, penyajian Dawet Ireng 
                                            ditambahkan nangka.
                                        </div>
                                        <a href="https://dinporapar.purworejokab.go.id/index.php/dawet-ireng-khas-purworejo-si-hitam-manis-pelepas-dahaga/"><button>Read More</button></a>
                                    </div>
                                </div>

                            </div>
                    </div>
                </div>
          </div>
        </div>

        <!-- Pakaian Adat -->
        <div class="test">
          <input type="checkbox" name="example_accordion" id="section2" class="accordion__input">
          <label for="section2" class="accordion__label">Section #2: Pakaian Adat</label>
          <div class="accordion__content">
                <div class="guide">
                    <div class="current-province">
                        <ion-icon name="information-circle-outline" class="ikon"></ion-icon>
                    </div>
                    <div class="dropdown-container" id="guide2">
                        <p>Hover on the cards!</p>
                    </div>
                </div>

                <div class="content-pakaian">
                    <div class="container">
                        <div class="card">
                            <div class="front">
                                <img src="../../../images/Jateng-Batik.jpg" alt="">
                            </div>
                            <div class="back">
                                <h4>Batik</h4>
                                <p>Jawa Tengah memiliki beragam jenis motif batik. Jenis batik tertentu digunakan untuk kondisi tertentu dan memiliki
                                    makna tertentu seperti Batik Sido Wirasat yang digunakan oleh orang tua mempelai pengantin dalam acara pernikahan. </p>
                            </div>
                        </div>
                    </div>


                    <div class="container">
                        <div class="card">
                            <div class="front">
                                <img src="../../../images/Jateng-Kebaya.jpeg" alt="">
                            </div>
                            <div class="back">
                                <h4>Kebaya</h4>
                                <p>Kebaya merupakan pakaian adat yang dikhususkan untuk para wanita. Kebaya Jawa tengah terbuat dari beberapa bahan
                                    berbeda dan biasanya dipakai dengan menggunakan kain kemben, stagen, kain jarik, dan aksesoris lainnya. Pada 
                                    umumnya kebaya ini berwarna hitam.</p>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="card">
                            <div class="front">
                                <img src="../../../images/Jateng-Beskap.jpg" alt="">
                            </div>
                            <div class="back">
                                <h4>Beskap</h4>
                                <p>Kain polos atau hitam dengan desain sederhana dan kerah lurus tanpa lipatan, model beskap dibuat tidak simetris 
                                    sebagai berjaga-jaga untuk menyimpan keris.Selama ini, dikenal empat macam jenis beskap di Jawa Tengah. Beskap 
                                    Gaya Jogja, Beskap Landung, Beskap Gaya Kulon, dan Beskap Gaya Solo</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="container">
                        <div class="card">
                            <div class="front">
                                <img src="../../../images/Jateng-BajuSurjan.jpeg" alt="">
                            </div>
                            <div class="back">
                                <h4>Surjan</h4>
                                <p>Baju Surjan tampak mirip dengan beskap disertai motif lurik-lurik coklat dan hitam yang di bagian depannya 
                                    terdapat saku dengan bawahan berupa kain panjang bermotif batik dan sebagai penutup kepala, para pria dapat 
                                    menggunakan blangkon yang terbuat dari kain batik</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="container">
                        <div class="card">
                            <div class="front">
                                <img src="../../../images/Jateng-Kuluk.jpg" alt="">
                            </div>
                            <div class="back">
                                <h4>Kuluk</h4>
                                <p>
                                    Sama fungsinya seperti blankon, yaitu sebagai penutup kepala pada pria. Hanya saja, bentuk dari kuluk lebih 
                                    tinggi dan strukturnya lebih kaku. Kuluk digunakan saat acara pernikahan oleh mempelai pria.
                                </p>
                            </div>
                        </div>
                    </div>
        
                    <div class="container">
                        <div class="card">
                            <div class="front">
                                <img src="../../../images/Jateng-Keris.jpg" alt="">
                            </div>
                            <div class="back">
                                <h4>Keris</h4>
                                <p>
                                    Salah satu senjata tradisional Jawa Tengah. Gagang keris dibuat menghadap ke kanan sebagai perlambang 
                                    kecenderungan terhadap kebenaran. Kemudian ujung gagangnya seakan menunduk ke bawah untuk menandakan 
                                    kerendahan hati manusia yang membawanya. 
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="card">
                            <div class="front">
                                <img src="../../../images/Jateng-Kanigaran.jpg" alt="">
                            </div>
                            <div class="back">
                                <h4>Kanigaran</h4>
                                <p>
                                    Pakaian acara pernikahan jawa tengah. Untuk pria, atasan berupa beskap beludru berkerah dihiasi sulaman emas. 
                                    Wanita mengenakan warna yang senada namun tanpa kerah. untuk bawahan menggunakan Dodoran atau Kampuh.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="card">
                            <div class="front">
                                <img src="../../../images/Jateng-Basahan.jpg" alt="">
                            </div>
                            <div class="back">
                                <h4>Basahan</h4>
                                <p>
                                    Pakaian adat untuk pernikahan. Pria bertelanjang dada dengan mengenakan kalung, dan bawahan kain dodot,
                                    dilengkapi keris dan kuluk. Wanita mengenakan kemben untuk menutupi tubuh bagian atas sementara bawahannya 
                                    juga menggunakan Dodot.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="card">
                            <div class="front">
                                <img src="../../../images/Jateng-JawiJangkep.jpg" alt="">
                            </div>
                            <div class="back">
                                <h4>Jawi-Jangkep</h4>
                                <p>
                                    Pakaian adat untuk pernikahan. Pria bertelanjang dada dengan mengenakan kalung, dan bawahan kain dodot,
                                    dilengkapi keris dan kuluk. Wanita mengenakan kemben untuk menutupi tubuh bagian atas sementara bawahannya 
                                    juga menggunakan Dodot.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tombol">
                    <a href="https://www.gramedia.com/literasi/pakaian-adat-jawa-tengah/"><button>Read More</button></a>
                </div>
                
          </div>
        </div>

        <!-- Alat Musik Tradisional -->
        <div class="test">
          <input type="checkbox" name="example_accordion" id="section3" class="accordion__input">
          <label for="section3" class="accordion__label">Section #3: Alat Musik Tradisional</label>
          <div class="accordion__content" id="atmus">
            <div class="guide">
                <div class="current-province">
                    <ion-icon name="information-circle-outline" class="ikon"></ion-icon>
                </div>
                <div class="dropdown-container" id="guide2">
                    <p>Read Only !</p>
                </div>
            </div>

            <div class="mvv-container">
                <div class="mv-block">
                    <div class="image">
                        <img src="../../../images/Jateng-Saron.jpg" alt="">
                    </div>
                    <div class="kata">
                        <h7>Saron</h7>
                        <p class ="kecil" align="justify">
                            Saron atau orang Jawa Tengah biasa menyebutnya ricik, merupakan alat musik gamelan dari keluarga balungan. Saron ini 
                            terbuat dari lembaran logam dan dimainkan dengan cara dipukul dengan palu khusus yang terbuat dari kayu.
                            <br><br>
                            Pada umumnya dalam permainan gamelan terdapat empat saron. Setiap saron memiliki versi pelog dan slendro. Alat musik ini
                            menghasilkan bunyi dengan tingkat yang lebih tinggi dari demung dan memiliki bentuk fisik yang lebih kecil.
                        </p>
                    </div>
                </div>
            
                <div class="mv-block">
                    <div class="image">
                        <img src="../../../images/Jateng-Siter.jpg" alt="">
                    </div>
                    <div class="kata">
                        <h7>Siter</h7>
                        <p align="justify">
                            Alat musik Jawa Tengah selanjutnya adalah Siter yang termasuk dalam gamelan Jawa. Bunyi yang dihasilkan siter berasal 
                            dari dawai (senar) yang mengeluarkan nada-nada harmonis dan menambah keindahan baris-baris gamelan. Ada dua jenis siter
                            di Jawa Tengah, yaitu siter peninggalan (kecil) dan siter clempung (besar).
                            <br><br>
                            Setiap siter penerus dan Celempung masing-masing memiliki 11 dan 13 pasang senar, yang kemudian direntangkan di kedua 
                            sisi antara resonator. Keistimewaan siter terletak pada susunan senarnya, dimana senar yang satu diselaraskan dengan 
                            nada pelog dan senar lainnya dengan nada slendro. 
                        </p>
                    </div>
                </div>
        
                <div class="mv-block">
                    <div class="image">
                        <img src="../../../images/Jateng-Kenong.jpg" alt="">
                    </div>
                    <div class="kata">
                        <h7>Kenong</h7>
                        <p align = "justify">
                            Kenong adalah alat musik tradisional dari Jawa Tengah yang membentuk gamelan Jawa. Alat musik ini dimainkan dengan cara
                            dipukul menggunakan satu alat pemukul. Dalam musik gamelan, Kenong Gamelan bertindak sebagai penyangga akord atau 
                            harmoni dan menentukan batas-batas gatra dan menonjolkan ritme.

                            Kenong adalah alat musik perkusi namun ukurannya lebih besar dari bonang. Umumnya seikat Kenong dibagi menjadi 10 buah.
                            Alat musik ini termasuk alat musik pencon gamelan yang paling keras dan lebar dibandingkan alat musik kempul dan gong 
                            yang berbentuk pipih.
                        </p>
                    </div>
                </div>

                <div class="tombol1">
                    <a href="https://www.gramedia.com/best-seller/alat-musik-jawa-tengah-yang-populer-dan-terkenal/"><button>Read More</button></a>
                </div>

            </div>
          </div>
            
        </div>

        <!-- Rumah Adat -->
        <div class="test">
            <input type="checkbox" name="example_accordion" id="section4" class="accordion__input">
            <label for="section4" class="accordion__label">Section #4: Rumah Adat</label>
            <div class="accordion__content">
                <div class="guide">
                    <div class="current-province">
                        <ion-icon name="information-circle-outline" class="ikon"></ion-icon>
                    </div>
                    <div class="dropdown-container" id="guide2">
                        <p>Read Only !</p>
                    </div>
                </div>

                <div class="mvv-container">
                    <div class="mv-block">
                        <div class="image">
                            <img src="../../../images/Jateng-Joglo.jpeg" alt="">
                        </div>
                        <div class="kata">
                            <h7>Joglo</h7>
                            <p align = "justify">
                                Rumah joglo merupakan salah satu bentuk rumah adat yang paling terkenal di Indonesia. Joglo biasanya dibangun dengan
                                menggunakan kayu jati dan dihiasi dengan ukiran-ukiran yang sangat indah. Bangunan joglo memiliki atap yang lebar 
                                dan melengkung dengan puncak atap yang tinggi, serta seringkali dihiasi dengan hiasan-hiasan yang indah.
                                <br> <br>
                                Rumah joglo biasanya memiliki beberapa ruangan, seperti ruang tamu, ruang keluarga, kamar tidur, dan dapur. Secara 
                                tradisional, rumah joglo digunakan sebagai tempat tinggal bagi keluarga kerajaan dan kaum bangsawan pada zaman 
                                dahulu. Saat ini, rumah joglo masih dijaga dan dihargai sebagai warisan budaya yang penting bagi masyarakat Jawa. 
                            </p>
                        </div>
                    </div>
                </div>

                <div class="tombol">
                    <a href="https://www.liputan6.com/hot/read/5252989/joglo-adalah-rumah-adat-dari-pelajari-juga-ciri-khas-dan-jenisnya"><button>Read More</button></a>
                </div>

            </div>
              
        </div>

        <!-- Upacara Adat -->
        <div class="test">
            <input type="checkbox" name="example_accordion" id="section5" class="accordion__input">
            <label for="section5" class="accordion__label">Section #5: Upacara Adat</label>
            <div class="accordion__content">
                <div class="guide">
                    <div class="current-province">
                        <ion-icon name="information-circle-outline" class="ikon"></ion-icon>
                    </div>
                    <div class="dropdown-container" id="guide2">
                        <p>Try clicking the cylinder under!</p>
                    </div>
                </div>

                <div class="content-makanan">
                    <div class="container-makanan">
                        <div class="content-slide">
                            <input type="radio" name="select1" id="slide1u" checked>
                            <input type="radio" name="select1" id="slide2u">
                            <input type="radio" name="select1" id="slide3u">    
                            <input type="checkbox" id="slideImgu">
            
                            <div class="slider-makanan">
                                <label for="slide1u" class="slide slide1u"></label>
                                <label for="slide2u" class="slide slide2u"></label>
                                <label for="slide3u" class="slide slide3u"></label>
                            </div>
            
                            <div class="inner">
                                <label for="slideImg" class="gmbr">
                                    <img class="img1u" src="../../../images/Jateng-wetongan.jpg">
                                </label>
                                <div class="konten konten1u">
                                    <div class="jdul">Tradisi Wetonan</div>
                                    <div class="isip">
                                        Wetonan merupakan salah satu tradisi yang dilaksanakan oleh masyarakat dari suku Jawa Tengah. Istilah 
                                        wetonan dalam bahasa Jawa adalah memperingati hari kelahiran. Umumnya, upacara wetonan dihelat saat seorang
                                        bayi telah menginjak usia 35 hari. Pada hari ke-35, keluarga dari bayi tersebut pun akan mengadakan upacara 
                                        bernama nyelapani. Istilah nyelapani memiliki bentuk dasar selapan dengan usia satu bulan dalam perhitungan 
                                        Jawa atau 35 hari. Penanggalan juga diikuti sesuai dengan kalender masehi dari Senin - Jumat 
                                    </div>
                                    <a href="https://adjar.grid.id/read/543596202/apa-itu-tradisi-wetonan?page=all"><button>Read More</button></a>
                                </div>
                            </div>
            
                            <div class="inner">
                                <label for="slideImg" class="gmbr">
                                    <img class="img2u" src="../../../images/Jateng-Sandranan.jpeg">
                                </label>
                                <div class="konten konten2u">
                                    <div class="jdul">Tradisi Sandranan</div>
                                    <div class="isip">
                                        Masyarakat Jawa melaksanakan upacara Sadranan pada bulan Jawa Islam Ruwah sebelum bulan puasa atau pada bulan
                                        Ramadhan. Upacara Sadranan ini dilaksanakan dengan ziarah kubur dari makam ke makan dan disertai dengan 
                                        menabur bunga atau dikenal dengan istilah nyekar. <br>
                                        Sebagai catatan, lapisan masyarakat Jawa yang melaksanakan tradisi upacara adat satu ini tidak hanya umat 
                                        Islam saja, akan tetapi ada banyak umat agama lain yang turut merayakan tradisi Sadranan.
                                    </div>
                                    <a href="https://www.djkn.kemenkeu.go.id/kpknl-purwokerto/baca-artikel/16021/Mengenal-Nyadran-Tradisi-Menyambut-Bulan-Ramadan.html"><button>Read More</button></a>
                                </div>
                            </div>
            
                            <div class="inner">
                                <label for="slideImg" class="gmbr">
                                    <img class="img3u" src="../../../images/tumpek.jpeg">
                                </label>
                                <div class="konten konten3u">
                                    <div class="jdul">Tradisi Padusan</div>
                                    <div class="isip">
                                        Berasal dari kata adus yang berarti mandi. Padusan merupakan tradisi masyarakat Jawa untuk menyucikan diri, 
                                        membersihkan jiwa dan raga, dalam menyambut datangnya bulan suci. Tradisi yang merupakan warisan leluhur 
                                        yang dilakukan secara turun temurun ini dijalani dengan cara berendam atau mandi di sumur-sumur atau sumber
                                        mata air. Tujuan dari padusan ini adalah agar saat Ramadan datang, kita dapat menjalani ibadah dalam kondisi
                                        suci lahir maupun batin.
                                    </div>
                                    <a href="https://www.indonesia.go.id/ragam/budaya/kebudayaan/padusan-tradisi-penyucian-diri-masyarakat-jawa"><button>Read More</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Destinasi Wisata -->
        <div class="test">
            <input type="checkbox" name="example_accordion" id="section6" class="accordion__input">
            <label for="section6" class="accordion__label">Section #6: Destinasi Wisata</label>
            <div class="accordion__content">
                <div class="guide">
                    <div class="current-province">
                        <ion-icon name="information-circle-outline" class="ikon"></ion-icon>
                    </div>
                    <div class="dropdown-container" id="guide2">
                        <p>Hover on the inner box !</p>
                    </div>
                </div>

                <div class="container-rumah">
                    <div class="card" style="--clr:#0b495e;">
                        <div class="imgBx">
                            <img src="../../../images/Jateng-Borobudur.jpg" alt="">
                        </div>
                        <div class="content-rumah">
                            <h2>Borobudur</h2>
                            <p class="gwk2">
                                Terletak di Kabupaten Magelang, Jawa Tengah, candi yang sangat megah dan rupawan ini dikenal sebagai kuil Buddha 
                                terbesar di dunia dengan luas sekitar 2500 meter persegi dan tinggi 35,40 meter. Struktur bangunan ini berbentuk 
                                kotak dengan empat pintu masuk dan titik pusat berbentuk lingkaran. Jika dilihat dari luar hingga ke dalam terbagi 
                                menjadi dua bagian yaitu alam dunia yang terbagi menjadi tiga zona di bagian luar, dan alam Nirwana di bagian pusat.
                            </p>
                            <div class="tombol2">
                                <a href="https://borobudurpark.com/temple/borobudur/"><button>Read More</button></a>
                            </div>
                        </div>            
                    </div>
            
                    <div class="card" style="--clr:#0b495e;">
                        <div class="imgBx">
                            <img src="../../../images/Jateng-Prambanan.jpg" alt="">
                        </div>
                        <div class="content-rumah">
                            <h2>Prambanan</h2>
                            <p class="gwk3">
                                Candi Prambanan merupakan candi Hindu yang terbesar di Indonesia sekaligus salah satu candi yang terindah di Asia 
                                Tenggara. Sampai saat ini belum dapat dipastikan kapan candi ini dibangun dan atas perintah siapa, namun kuat dugaan 
                                bahwa Candi Prambanan dibangun sekitar pertengahan abad ke-9 oleh raja Wangsa Sanjaya, yaitu Raja Balitung Maha
                                Sambu. Denah asli Candi Prambanan berbentuk persegi panjang, terdiri atas halaman luar dan tiga pelataran, yaitu Jaba 
                                (pelataran luar), Tengahan (pelataran tengah) dan Njeron (pelataran dalam).
                            </p>
                            <div class="tombol2">
                                <a href="https://borobudurpark.com/temple/prambanan/"><button>Read More</button></a>
                            </div>
                        </div>            
                    </div>
            
                    <div class="card" style="--clr:#0b495e;">
                        <div class="imgBx">
                            <img src="../../../images/Jateng-LawangSewu.jpg" alt="">
                        </div>
                        <div class="content-rumah">
                            <h2>Lawang Sewu</h2>
                            <p class="gwk3">
                                Tempat wisata Jawa Tengah yang ketiga yakni Lawang Sewu. Lawang Sewu adalah bangunan kuno yang merupakan peninggalan 
                                Belanda. Bangunan ini sebenarnya merupakan situs yang awalnya digunakan sebagai perusahaan kereta api atau trem 
                                Belanda. Sesuai dengan namanya yang berarti 'Seribu Pintu', bangunan yang berdiri sejak tahun 1904 ini memang 
                                memiliki banyak sekali pintu. Arsitekturnya yang menawan seringkali digunakan sebagai latar untuk tempat foto 
                                prewedding, syuting film, atau semacamnya.
                            </p>
                            <div class="tombol2">
                                <a href="https://www.gramedia.com/literasi/sejarah-lawang-sewu/"><button>Read More</button></a>
                            </div>
                        </div>            
                    </div>
                </div>
            </div>
        </div>

        <!-- Lagu Adat -->
        <div class="test">
            <input type="checkbox" name="example_accordion" id="section7" class="accordion__input">
            <label for="section7" class="accordion__label">Section #7: Lagu Adat</label>
            <div class="accordion__content">
                <div class="guide">
                    <div class="current-province">
                        <ion-icon name="information-circle-outline" class="ikon"></ion-icon>
                    </div>
                    <div class="dropdown-container" id="guide2">
                        <p>You can play the video, and change tabs by clicking the song title above!</p>
                    </div>
                </div>

                <div class="mytabs">
                    <input type="radio" id="tab1" name="page1" checked="checked">
                    <label for="tab1">Cublak - Cublak Suweng</label>
                    <div class="tab">
                        <h2>Cublak - Cublak Suweng</h2>
                        <video src="../../../audio/Jateng-Cublak-Cublak Suweng.mp4" controls></video>
                        <p>
                            Makna dari lirik lagu yang terkandung dalam lagu Cublak-cublak Suweng adalah untuk mencari harta jangan hanya menuruti 
                            hawa nafsu saja. Namun semuanya memang harus kembali ke hati nurani yang begitu bersih yang tidak dipengaruhi oleh hawa
                            nafsu. Dengan menggunakan hati nurani dalam mencari harta, kita akan merasa lebih mudah untuk mencari kebahagiaan dan 
                            tidak akan tersesat jalan hingga lupa akan akhirat. <br><br>
                            Sedangkan jika dilihat dari segi kultural, lagu dolanan Cublak-cublak Suweng dapat memberikan pembelajaran kepada anak 
                            agar tidak mengikutiu hawa nafsu, selalu menjaga keharmonisan dengan alam serta sesama manusia dan orang tua.
                        </p>
                        
                    </div>
            
                    <input type="radio" id="tab2" name="page1">
                    <label for="tab2">Lir - Ilir</label>
                    <div class="tab">
                        <h2>Lir - Ilir</h2>
                        <video src="../../../audio/Jateng-Lir ilir.mp4" controls></video>
                        <p>
                            Lagu ini diciptakan oleh Sunan Kalijaga dalam rangka menyebarkan agama Islam di tanah Jawa pada awal abad ke-16. Dalam 
                            lagu Lir-Ilir tersebut, sebenarnya memiliki makna bahwa kita sebagai umat manusia harus bangun dari keterpurukan. Kita 
                            harus bangun dari sifat malas yang ada dalam diri kita ini. <br><br>
                            Diri manusia itu dilambangkan sebagai tanaman yang sedang bersemi dan berwarna hijau. Maka, terserah diri kita untuk 
                            tetap tidur (bermalas-malasan) sehingga “tanaman” dalam diri kita akan mati; atau akan bangun (berjuang) supaya 
                            “tanaman” dalam diri kita dapat tumbuh besar.
                        </p>
                    </div>
            
                    <input type="radio" id="tab3" name="page1">
                    <label for="tab3">Gundul - Gundul Pacul</label>
                    <div class="tab">
                        <h2>Gundul - Gundul Pacul</h2>
                        <video src="../../../audio/Jateng-Gundul Pacul.mp4" controls></video>
                        <p>
                            Lagu ini termasuk salah satu lagu ciptaan dari Sunan Kalijaga pada tahun 1400-an. <br>
                            Gundul-gundul Pacul memiliki lirik yang begitu bermakna. Secara garis besar, setiap lirik yang ada di dalam lagu 
                            tersebut memiliki nasihat terhadap para pemimpi agar bisa senantiasa amanah dalam menjalankan jabatannya serta 
                            menyetarakan rakyatnya. Sebagaimana yang tersirat dalam satu potongan lirik lagu Gundul-gundul Pacul yang berbunyi 
                            “Wakul ngglimpang segane dadi sak ratan.” Artinya adalah apabila seorang pemimpin memiliki sifat angkuh dan semena-mena
                            dan bersfifat sombong, meka kekuasaan dan jabatannya yang mereka miliki akan mudah gugur dalam kurun waktu singkat.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tari Adat -->
        <div class="test">
            <input type="checkbox" name="example_accordion" id="section8" class="accordion__input">
            <label for="section8" class="accordion__label">Section #8: Tari Adat</label>
            <div class="accordion__content">
                <div class="guide">
                    <div class="current-province">
                        <ion-icon name="information-circle-outline" class="ikon"></ion-icon>
                    </div>
                    <div class="dropdown-container" id="guide2">
                        <p>Read Only !</p>
                    </div>
                </div>
                
                <div class="mvv-container">
                    <div class="mv-block">
                        <div class="image">
                            <img src="../../../images/Jateng-TariGambyong.jpg" alt="">
                        </div>
                        <div class="kata">
                            <h7>Tari Gambyong</h7>
                            <p class ="kecil" align="justify">
                                Awalnya menjadi populer dari Surakarta. Tari Gambyong biasanya ditampilkan pada musim tanam dan panen padi sebagai 
                                penghormatan kepada Dewi Sri. <br>Tarian tradisional ini biasanya dibawakan oleh dua wanita muda yang mengenakan gaun 
                                berwarna hijau yang dipadukan dengan celana berdasi, selendang panjang berwarna kuning yang dililitkan di pinggang 
                                dan hiasan kepala. Para penari diiringi lagu-lagu khas budaya Jawa yang dibawakan oleh sinden (penyanyi) dan lagu 
                                gamelan (alat musik tradisional Jawa). Gerak tari tradisional Jawa Tengah ini cukup pandai dan terampil berpadu 
                                dengan penonton di atas panggung.
                            </p>
                        </div>
                    </div>
                
                    <div class="mv-block">
                        <div class="image">
                            <img src="../../../images/Jateng-TariGolek.jpg" alt="">
                        </div>
                        <div class="kata">
                            <h7>Tari Golek</h7>
                            <p align="justify">
                                Sebuah tarian solo yang menggambarkan seorang gadis muda tumbuh menjadi seorang wanita dewasa. Postur dan teknik 
                                dasarnya mengingatkan pada tarian Bedhaya dan Serimpi, tetapi gerakan deskriptif mengungkapkan kecantikan gadis itu
                                sendiri. <br><br>
                                Nama Golek terkait dengan Wayang Golek, dan tradisi ini memiliki kesejajaran dalam sejarah Wayang Golek. Tari Golek
                                secara tradisional ditampilkan pada resepsi pernikahan yang meriah atau acara budaya tertentu.
                        </div>
                    </div>
            
                    <div class="mv-block">
                        <div class="image">
                            <img src="../../../images/Jateng-TariBedhaya.jpg" alt="">
                        </div>
                        <div class="kata">
                            <h7>Tari Bedhaya</h7>
                            <p align = "justify">
                                Bedhaya memiliki makna religius yang mendalam bagi para pemain dan penonton. Prinsip estetika dikaitkan dengan 
                                gagasan keindahan dan kekuatan yang tak terucapkan, dan tari Bedhaya dianggap sebagai bentuk yoga atau meditasi. 
                                Tari Bedhaya merupakan tarian klasik dari keraton Surakarta. <br><br>
                                Tarian sakral ini menyuguhkan romantisme hubungan antara Ratu Kidul dan Raja Mataram yang diwujudkan dalam gerak 
                                tangan dan seluruh anggota tubuh. <br>
                                Pakaian termasuk sarung dasi, blus beludru dan syal emas. Tarian ini diiringi oleh alat musik gamelan.
                            </p>
                        </div>
                    </div>
    
                    <div class="tombol">
                        <a href="https://www.gramedia.com/literasi/tarian-jawa-tengah/#Tarian_dari_Jawa_Tengah"><button>Read More</button></a>
                    </div>
    
                </div>
            </div>
        </div>

    </div>

    <script>
        var slideIndex = 1;
            showSlide(slideIndex);
        
        function nextslide(n){
            showSlide(slideIndex += n);
        }

        function dotslide(n){
            showSlide(slideIndex=n);
        }

        function showSlide(n){
            var i;
            var slides = document.getElementsByClassName("imgslide");
            var dot = document.getElementsByClassName("dot");

            if(n>slides.length){
                slideIndex = 1;
            }

            if(n<1){
                slideIndex = slides.length;
            }

            for(i=0; i<slides.length; i++){
                slides[i].style.display = "none";
            }

            for(i=0; i<slides.length; i++){
                dot[i].className = dot[i].className.replace(" active","");
            }

            slides[slideIndex-1].style.display = "block";
            dot[slideIndex - 1].className += " active";
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="../script/wisata.js"></script>
    <script src="../../../script/upacara.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
    <script src="../../../script/tari.js"></script>
</body>
