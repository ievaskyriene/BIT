<div class="innermenu" id="menuStart">
    <h1 class="menu">
        Koreguokite pagrindinį Meniu
    </h1>
    <div class="cont sm-17-24">
        <?php
        // _dc($menu);
        foreach (range(0, (count($menu->names) - 1)) as $index) {
            // _dc($index);
            // if (is_array($menu->names[$index + 1]) && $index + 1 <= count($menu->names) - 1) 
            // {
            // _dc($index + 1);
        ?>
            <div class="menuItem">
                <div class="draggable parent" id="addDrag" draggable="true">
                    <?php
                    $wpPage = get_page_by_title($menu->pages[$index], 'OBJECT', 'page');
                    $pagePost = $page->get($wpPage->ID);
                    $link = $pagePost->getLink();
                    $name = $menu->names[$index];
                    ?>

                    <div class="menuName">
                        <label for="">
                        </label>
                        <input name="menu" class="menuText" placeholder="Pavadinimas" type="text" value="<?= $name ?>">
                        <input name="submenu" class="submenuText initmenu" placeholder="Pavadinimas" type="text">
                        <input name="menuhid" id="menuID" type="hidden" value="<?= $menu->ID ?>">
                    </div>

                    <div class="menuSelect">
                        <label for="standard-select">
                        </label>
                        <select class="select-css mainSelect" id="standard-select">
                            <option value="<?= $pagePost->getLink() ?>" selected><?= $menu->pages[$index] ?></option>>
                            <?php
                            foreach ($pages as $value) {
                            ?>
                                <option><?= $value->post_title ?></option>
                            <?php
                            }
                            ?>
                        </select>

                        <select class="select-css submenuSelect" id="standard-select">
                            <option value="" selected>Pasirinkite submeniu puslapį</option>
                            <?php
                            foreach ($catPages as $value) {
                            ?>
                                <option class="initoption" value="<?= $value->getLink() ?>"><?= $value->post_title ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="menuLinkAdd">
                        <label for="link">
                        </label>
                        <input class="menuLink" placeholder="Prideti išorinę nuoroda" type="text">
                        <input class="submenuLink initmenuLink" placeholder="Prideti išorinę nuoroda" type="text">
                    </div>

                    <div class="addSubmenu">
                        <svg height="40" version="1.1" viewBox="0 0 295 295" width="40">
                            <title />
                            <desc />
                            <defs />
                            <g fill="none" fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1">
                                <g fill-rule="nonzero" id="add">
                                    <path d="M251.63,43.179 C240.335,31.884 227.699,22.707 214.074,15.903 C211.108,14.421 207.506,15.626 206.026,18.59 C204.546,21.555 205.749,25.158 208.713,26.638 C221.18,32.864 232.765,41.284 243.145,51.664 C295.946,104.465 295.946,190.378 243.145,243.179 C190.344,295.98 104.431,295.98 51.63,243.179 C-1.171,190.378 -1.171,104.465 51.63,51.664 C77.207,26.086 111.215,12 147.386,12 C150.699,12 153.386,9.313 153.386,6 C153.386,2.687 150.699,0 147.386,0 C108.009,0 70.989,15.334 43.144,43.179 C-14.335,100.658 -14.335,194.185 43.144,251.664 C71.884,280.404 109.635,294.774 147.387,294.774 C185.139,294.774 222.89,280.404 251.63,251.664 C309.109,194.185 309.109,100.658 251.63,43.179 Z" fill="#000000" id="Shape" />
                                    <path d="M147.387,51.992 C144.074,51.992 141.387,54.679 141.387,57.992 L141.387,236.851 C141.387,240.165 144.074,242.851 147.387,242.851 C150.7,242.851 153.387,240.165 153.387,236.851 L153.387,57.992 C153.387,54.678 150.7,51.992 147.387,51.992 Z" fill="#3F93B3" id="Shape" />
                                    <path d="M171.387,153.421 L236.817,153.421 C240.13,153.421 242.817,150.734 242.817,147.421 C242.817,144.108 240.13,141.421 236.817,141.421 L171.387,141.421 C168.074,141.421 165.387,144.108 165.387,147.421 C165.387,150.734 168.073,153.421 171.387,153.421 Z" fill="#3F93B3" id="Shape" />
                                    <path d="M57.957,141.421 C54.644,141.421 51.957,144.108 51.957,147.421 C51.957,150.734 54.644,153.421 57.957,153.421 L121.387,153.421 C124.7,153.421 127.387,150.734 127.387,147.421 C127.387,144.108 124.7,141.421 121.387,141.421 L57.957,141.421 Z" fill="#3F93B3" id="Shape" />
                                </g>
                            </g>
                        </svg>
                    </div>

                    <div class="manuDelete">
                        <svg height="35" version="1.1" viewBox="0 0 295 295" width="40">
                            <title />
                            <desc />
                            <defs />
                            <g fill="none" fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1">
                                <g fill-rule="nonzero" id="close">
                                    <path d="M147.421,0 C66.133,0 0,66.133 0,147.421 C0,228.709 66.133,294.842 147.421,294.842 C185.708,294.842 221.988,280.233 249.58,253.706 C251.969,251.41 252.044,247.611 249.747,245.223 C247.452,242.835 243.654,242.759 241.264,245.056 C215.919,269.423 182.592,282.842 147.422,282.842 C72.75,282.843 12,222.093 12,147.421 C12,72.749 72.75,12 147.421,12 C222.092,12 282.842,72.75 282.842,147.421 C282.842,164.263 279.79,180.694 273.771,196.256 C272.576,199.347 274.112,202.821 277.203,204.017 C280.295,205.21 283.768,203.676 284.964,200.585 C291.519,183.636 294.843,165.749 294.843,147.42 C294.843,66.133 228.71,0 147.421,0 Z" fill="#000000" id="Shape" />
                                    <path d="M167.619,160.134 C165.249,157.815 161.451,157.857 159.134,160.224 C156.816,162.592 156.857,166.391 159.224,168.709 L206.46,214.945 C207.628,216.088 209.143,216.657 210.657,216.657 C212.214,216.657 213.77,216.054 214.945,214.854 C217.263,212.486 217.222,208.687 214.855,206.369 L167.619,160.134 Z" fill="#FB4A5E" id="Shape" />
                                    <path d="M125.178,133.663 C126.349,134.834 127.885,135.42 129.421,135.42 C130.957,135.42 132.492,134.834 133.664,133.663 C136.007,131.32 136.007,127.521 133.664,125.178 L88.428,79.942 C86.085,77.599 82.285,77.599 79.943,79.942 C77.6,82.285 77.6,86.084 79.943,88.427 L125.178,133.663 Z" fill="#FB4A5E" id="Shape" />
                                    <path d="M214.9,79.942 C212.557,77.599 208.757,77.599 206.415,79.942 L79.942,206.415 C77.599,208.758 77.599,212.557 79.942,214.9 C81.113,216.071 82.649,216.657 84.185,216.657 C85.721,216.657 87.256,216.071 88.428,214.9 L214.9,88.428 C217.243,86.084 217.243,82.286 214.9,79.942 Z" fill="#FB4A5E" id="Shape" />
                                </g>
                            </g>
                        </svg>
                    </div>

                    <div class="menuDrag">
                        <svg data-name="Layer 1" id="Layer_1" height="35" width="40" viewBox="0 0 32 32">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #515151;
                                    }
                                </style>
                            </defs>
                            <title />
                            <path class="cls-1" d="M16,9a3,3,0,1,0-3-3A3,3,0,0,0,16,9Zm0-4.46A1.46,1.46,0,1,1,14.54,6,1.46,1.46,0,0,1,16,4.54Z" />
                            <path class="cls-1" d="M16,19a3,3,0,1,0-3-3A3,3,0,0,0,16,19Zm0-4.46A1.46,1.46,0,1,1,14.54,16,1.46,1.46,0,0,1,16,14.54Z" />
                            <path class="cls-1" d="M16,29a3,3,0,1,0-3-3A3,3,0,0,0,16,29Zm0-4.46A1.46,1.46,0,1,1,14.54,26,1.46,1.46,0,0,1,16,24.54Z" />
                        </svg>
                    </div>
                </div>
                <div class="submenu sm-17-24">
                    <?php
                    if (count($menu->subnames[$index]) != 0) {
                        foreach ($menu->subnames[$index] as $key => $subindex) {
                    ?>

                            <div class="draggable child" id="addDrag" draggable="true">
                                <?php
                                $wpPage = get_page_by_title($menu->subpages[$index][$key], 'OBJECT', 'page');
                                $pagePost = $page->get($wpPage->ID);
                                $sublink = $pagePost->getLink();
                                $subname = $menu->subnames[$index][$key];
                                ?>
                                <div class="menuName">
                                    <label for="">
                                    </label>
                                    <input name="menu" class="menuText" placeholder="Pavadinimas" type="text" value="<?= $subname ?>">
                                    <input name="submenu" class="submenuText initmenu" placeholder="Pavadinimas" type="text">
                                    <input name="menuhid" id="menuID" type="hidden" value="<?= $menu->ID ?>">
                                </div>
                                <div class="menuSelect">
                                    <label for="standard-select">
                                    </label>
                                    <select class="select-css submenuSelect" style="display:block;" id="standard-select">
                                        <option value="<?= $pagePost->getLink() ?>" selected><?= $menu->subpages[$index][$key] ?></option>>
                                        <?php
                                        foreach ($catPages as $value) {
                                        ?>
                                            <option value="<?= $value->getLink() ?>"><?= $value->post_title ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="menuLinkAdd">
                                    <label for="link">
                                    </label>
                                    <input class="menuLink" placeholder="Prideti išorinę nuoroda" type="text">
                                    <input class="submenuLink initmenuLink" placeholder="Prideti išorinę nuoroda" type="text">
                                </div>

                                <div class="manuDelete">
                                    <svg height="35" version="1.1" viewBox="0 0 295 295" width="40">
                                        <title />
                                        <desc />
                                        <defs />
                                        <g fill="none" fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1">
                                            <g fill-rule="nonzero" id="close">
                                                <path d="M147.421,0 C66.133,0 0,66.133 0,147.421 C0,228.709 66.133,294.842 147.421,294.842 C185.708,294.842 221.988,280.233 249.58,253.706 C251.969,251.41 252.044,247.611 249.747,245.223 C247.452,242.835 243.654,242.759 241.264,245.056 C215.919,269.423 182.592,282.842 147.422,282.842 C72.75,282.843 12,222.093 12,147.421 C12,72.749 72.75,12 147.421,12 C222.092,12 282.842,72.75 282.842,147.421 C282.842,164.263 279.79,180.694 273.771,196.256 C272.576,199.347 274.112,202.821 277.203,204.017 C280.295,205.21 283.768,203.676 284.964,200.585 C291.519,183.636 294.843,165.749 294.843,147.42 C294.843,66.133 228.71,0 147.421,0 Z" fill="#000000" id="Shape" />
                                                <path d="M167.619,160.134 C165.249,157.815 161.451,157.857 159.134,160.224 C156.816,162.592 156.857,166.391 159.224,168.709 L206.46,214.945 C207.628,216.088 209.143,216.657 210.657,216.657 C212.214,216.657 213.77,216.054 214.945,214.854 C217.263,212.486 217.222,208.687 214.855,206.369 L167.619,160.134 Z" fill="#FB4A5E" id="Shape" />
                                                <path d="M125.178,133.663 C126.349,134.834 127.885,135.42 129.421,135.42 C130.957,135.42 132.492,134.834 133.664,133.663 C136.007,131.32 136.007,127.521 133.664,125.178 L88.428,79.942 C86.085,77.599 82.285,77.599 79.943,79.942 C77.6,82.285 77.6,86.084 79.943,88.427 L125.178,133.663 Z" fill="#FB4A5E" id="Shape" />
                                                <path d="M214.9,79.942 C212.557,77.599 208.757,77.599 206.415,79.942 L79.942,206.415 C77.599,208.758 77.599,212.557 79.942,214.9 C81.113,216.071 82.649,216.657 84.185,216.657 C85.721,216.657 87.256,216.071 88.428,214.9 L214.9,88.428 C217.243,86.084 217.243,82.286 214.9,79.942 Z" fill="#FB4A5E" id="Shape" />
                                            </g>
                                        </g>
                                    </svg>
                                </div>

                                <div class="menuDrag">
                                    <svg data-name="Layer 1" id="Layer_1" height="35" width="40" viewBox="0 0 32 32">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #515151;
                                                }
                                            </style>
                                        </defs>
                                        <title />
                                        <path class="cls-1" d="M16,9a3,3,0,1,0-3-3A3,3,0,0,0,16,9Zm0-4.46A1.46,1.46,0,1,1,14.54,6,1.46,1.46,0,0,1,16,4.54Z" />
                                        <path class="cls-1" d="M16,19a3,3,0,1,0-3-3A3,3,0,0,0,16,19Zm0-4.46A1.46,1.46,0,1,1,14.54,16,1.46,1.46,0,0,1,16,14.54Z" />
                                        <path class="cls-1" d="M16,29a3,3,0,1,0-3-3A3,3,0,0,0,16,29Zm0-4.46A1.46,1.46,0,1,1,14.54,26,1.46,1.46,0,0,1,16,24.54Z" />
                                    </svg>
                                </div>
                            </div>
                    <?php
                        }
                    }

                    ?>
                </div>
            </div>
        <?php
        }

        ?>



    </div>
    <div class="menuBtn">
        <div class="addNew">
            <svg height="40" version="1.1" viewBox="0 0 295 295" width="40">
                <title />
                <desc />
                <defs />
                <g fill="none" fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1">
                    <g fill-rule="nonzero" id="add">
                        <path d="M251.63,43.179 C240.335,31.884 227.699,22.707 214.074,15.903 C211.108,14.421 207.506,15.626 206.026,18.59 C204.546,21.555 205.749,25.158 208.713,26.638 C221.18,32.864 232.765,41.284 243.145,51.664 C295.946,104.465 295.946,190.378 243.145,243.179 C190.344,295.98 104.431,295.98 51.63,243.179 C-1.171,190.378 -1.171,104.465 51.63,51.664 C77.207,26.086 111.215,12 147.386,12 C150.699,12 153.386,9.313 153.386,6 C153.386,2.687 150.699,0 147.386,0 C108.009,0 70.989,15.334 43.144,43.179 C-14.335,100.658 -14.335,194.185 43.144,251.664 C71.884,280.404 109.635,294.774 147.387,294.774 C185.139,294.774 222.89,280.404 251.63,251.664 C309.109,194.185 309.109,100.658 251.63,43.179 Z" fill="#000000" id="Shape" />
                        <path d="M147.387,51.992 C144.074,51.992 141.387,54.679 141.387,57.992 L141.387,236.851 C141.387,240.165 144.074,242.851 147.387,242.851 C150.7,242.851 153.387,240.165 153.387,236.851 L153.387,57.992 C153.387,54.678 150.7,51.992 147.387,51.992 Z" fill="#3F93B3" id="Shape" />
                        <path d="M171.387,153.421 L236.817,153.421 C240.13,153.421 242.817,150.734 242.817,147.421 C242.817,144.108 240.13,141.421 236.817,141.421 L171.387,141.421 C168.074,141.421 165.387,144.108 165.387,147.421 C165.387,150.734 168.073,153.421 171.387,153.421 Z" fill="#3F93B3" id="Shape" />
                        <path d="M57.957,141.421 C54.644,141.421 51.957,144.108 51.957,147.421 C51.957,150.734 54.644,153.421 57.957,153.421 L121.387,153.421 C124.7,153.421 127.387,150.734 127.387,147.421 C127.387,144.108 124.7,141.421 121.387,141.421 L57.957,141.421 Z" fill="#3F93B3" id="Shape" />
                    </g>
                </g>
            </svg>
        </div>
        <div class="save">
            <svg height="40" data-name="Layer 1" id="Layer_1" viewBox="0 0 500 500">
                <defs>
                    <style>
                        .cals-1 {
                            fill: #559051;
                        }

                        .cals-2 {
                            fill: #73C186;
                        }

                        .cals-3 {
                            fill: #fff;
                        }
                    </style>
                </defs>
                <title />
                <circle class="cals-1" cx="250" cy="250" r="250" />
                <circle class="cals-2" cx="250" cy="250" r="203.65" />
                <path class="cals-3" d="M357.79,246.46a29.62,29.62,0,0,0-26.69-16.69H288.95a28.27,28.27,0,0,0,.34-3.69V156.28a39.31,39.31,0,1,0-78.62,0v69.81a28.4,28.4,0,0,0,.34,3.69H168.92a29.7,29.7,0,0,0-23.44,47.94L226.61,381.9a29.67,29.67,0,0,0,46.81,0l81.12-104.19A29.53,29.53,0,0,0,357.79,246.46Zm-23,15.94L253.67,366.53a4.56,4.56,0,0,1-3.69,1.81,4.72,4.72,0,0,1-3.69-1.81L165.17,262.4a4.46,4.46,0,0,1-.5-4.94,4.57,4.57,0,0,1,4.25-2.69h66.75v-98.5a14.31,14.31,0,1,1,28.62,0v98.5h66.81a4.4,4.4,0,0,1,4.19,2.69A4.46,4.46,0,0,1,334.79,262.4Z" />
            </svg>
        </div>
    </div>
</div>