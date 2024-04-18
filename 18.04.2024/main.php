<html lang="pl">
<body>



<div class="main_container">
    <div class="baner_and_reference_container">
        <div class="main_baner_box"></div>
            <div class="main_reference_container">
                <div class="main_reference_box">

                    <a href="https://www.tlimc.szczecin.pl/dzialy/plan_lekcji/zastepstwa/">
                    <div class="main_reference">
                            <img src="pics/icons/teacher_colored.png" alt="ikona" class="reference_icon">
                            <p class="reference_text">Zastępstwa</p>
                    </div>
                    </a>

                    <a href="#">
                    <div class="main_reference">
                        <img src="pics/icons/gallery_colored.png" alt="ikona" class="reference_icon">
                        <p class="reference_text">Galeria</p>
                    </div>
                    </a>

                    <a href="#">
                    <div class="main_reference">
                        <img src="pics/icons/student_colored.png" alt="ikona" class="reference_icon">
                        <p class="reference_text">Rekrutacja</p>
                    </div>
                    </a>

                    <a href="#">
                    <div class="main_reference">
                            <img src="pics/icons/online-learning_colored.png" alt="ikona" class="reference_icon">
                            <p class="reference_text">E-dziennik</p>
                    </div>
                    </a>
                </div>
            </div>
    </div>
    <div class="content_container">
        <div class="announcement_section_with_button">
            <h1 class="section_text">Aktualności</h1>
            <a class="transition_button" href="index.php?site=announcements">Zobacz więciej<span class="material-symbols-rounded">chevron_right</span></a>
        </div>
        <div class="announcements-container">
                <a href="index.php?site=announcement_details&nr=3">
                    <div class="announcement-box" data-type="ogloszenie">
                        <img src="pics/aktualnosci/3.jpg" alt="">
                        <div class="announcement-texts">
                            <div>
                                <h3>Próbne, ustne egzaminy maturalne z języka polskiego</h3>
                                <h2>2024-02-21</h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae eos maxime, ex ipsam nostrum dolorem perspiciatis? Earum id accusantium animi reprehenderit commodi, incidunt molestiae, libero nam aut corporis numquam error pariatur ipsa facere doloremque ut possimus exercitationem perspiciatis iste ea cupiditate. Dolore aliquam eveniet tenetur officia dolores error suscipit. Esse?</p>
                        </div>
                    </div>
                </a>
                <a href="index.php?site=announcement_details&nr=2">
                    <div class="announcement-box" data-type="konkurs">
                        <img src="pics/aktualnosci/2.jpg" alt="">
                        <div class="announcement-texts">
                            <div>
                                <h3>Szkolny konkurs karaoke</h3>
                                <h2>2024-02-21</h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, deleniti quaerat commodi quis est, doloremque corporis cum repudiandae velit minus iste beatae aut rem earum maiores eos. Autem corrupti nesciunt eius illo a id rem excepturi fugiat odit laboriosam, necessitatibus natus omnis adipisci cupiditate voluptates officiis ducimus laudantium consequuntur accusantium reprehenderit ex! Pariatur quasi reprehenderit laudantium saepe repellat optio quia minima ab provident soluta, in aperiam excepturi doloribus! Tenetur libero atque ratione incidunt, sit numquam ex dolorem minus sapiente! Ut.</p>
                        </div>
                    </div>
                </a>
                <a href="index.php?site=announcement_details&nr=1">
                    <div class="announcement-box" data-type="ogloszenie">
                        <img src="pics/aktualnosci/1.jpg" alt="">
                        <div class="announcement-texts">
                            <div>
                                <h3>Tydzień Języków Obcych</h3>
                                <h2>2024-02-21</h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ullam ab voluptate perferendis velit hic magnam nostrum sequi, natus officia soluta libero atque eos sint reiciendis. Excepturi esse officia ab illum aut.</p>
                        </div>
                    </div>
                </a>
        </div>

        <div class="project_calendar_section">
            <div class="projects_section">
                <div class="projects_header">
                    <h1 class="section_text">Projekty</h1>
                </div>
                <div class="projects_container">
                    <div class="project_container">
                        <div class="erasmus_box">
                            <div class="project_button_box">
                                <a class="project_button">Zobacz<span class="material-symbols-rounded">chevron_right</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            
            <div class="calendar_section">
                <div class="calendar_header_text">
                    <h1 class="section_text">Kalendarz</h1>
                    <a class="transition_button" href="#">Kalendarium<span class="material-symbols-rounded">chevron_right</span></a>
                </div>
                <div class="minicalendar_container">
                    <?php
                        include("calendar.php");
                    ?>
                </div>
                // kropki sa wstawione losowo
            </div>
        </div>


        Ostatnia aktualizacja: 14.04.2024 22:57
        <ul>
            Zmiany:
            <li>Dodanie wstępnej stopki</li>
            <li>Poprawa ogólnej responsywności i kilku elementów</li>
        </ul>
        <br>
        <ul>
            ToDo:
            <li>Kropeczki w kalendarzu aby wspolgraly z baza</li>
            <li>Lepszy wygląd menu na telefonie</li>
            <li>LEPSZA responsywnosc przyciskow na banerze i sekcji z ogloszeniami</li>
        </ul>


    </div>
</div>



</body>
</html>