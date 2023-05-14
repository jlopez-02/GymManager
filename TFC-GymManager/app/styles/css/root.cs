@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Noto+Sans:wght@600&family=Open+Sans&family=Poppins&display=swap");
header nav {
  position: sticky;
  width: 100%;
  top: 0;
  right: 0;
  z-index: 1000;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: transparent;
  padding: 28px 12%;
  transition: all 0.5s ease;
}
header nav .logo-container {
  display: flex;
  align-items: center;
}
header nav .app_logo {
  display: inline-block;
  font-size: 2.3rem;
  font-weight: 600;
  margin-right: 3px;
  transition: all 0.5s;
  animation: breathing 5s ease-out infinite normal;
  padding: 5px;
}
header nav .app_logo:hover {
  color: #92b91f;
}
header nav #nav_list {
  display: flex;
}
header nav #nav_list a {
  display: inline-block;
  font-size: 1.3rem;
  font-weight: 400;
  padding: 5px 0;
  margin: 0px 30px;
  transition: all 0.5s ease;
}
header nav #nav_list a:hover {
  color: #92b91f;
  transform: translateY(5px);
}
header nav #nav_buttons {
  display: flex;
  align-items: center;
}
header nav #nav_buttons a {
  display: inline-block;
  font-size: 1.5rem;
  font-weight: 550;
  margin-right: 25px;
  margin-left: 10px;
  transition: all 0.5s ease;
  border: 2px solid #92b91f;
  border-radius: 7px;
  padding: 10px;
}
header nav #nav_buttons a:hover {
  color: #92b91f;
  transform: translateY(5px);
}
header nav #nav_buttons a i {
  color: #92b91f;
}
header nav #nav_buttons #menu-icon i {
  font-size: 35px;
  cursor: pointer;
  z-index: 10001;
  display: none;
}
header nav #nav_buttons .nav_button_container:hover {
  display: flex;
}

@media screen and (max-width: 1405px) {
  #login-logo {
    display: none;
  }
}
@media screen and (max-width: 1280px) {
  #nav_list {
    padding: 14px 2%;
    transition: 0.2s;
  }
  #nav_list a {
    padding: 5px 0;
    margin: 0px 20px;
  }
}
@media screen and (max-width: 1150px) {
  #login-logo {
    display: inline-block !important;
  }
  #menu-icon i {
    display: block !important;
  }
  #menu-icon i.clicked {
    color: #92b91f;
  }
  header nav #nav_list {
    position: absolute !important;
    top: -100vh;
    right: 2%;
    width: 270px;
    height: max-content;
    background-color: #92b91f;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    border-radius: 10px;
    transition: all 0.5s ease;
  }
  header nav #nav_list a {
    display: block;
    margin: 18px 0 !important;
    padding: 0px 25px;
    transition: all 0.5s ease;
  }
  header nav #nav_list a:hover {
    color: #fff !important;
  }
  header nav #nav_list.open {
    top: 100%;
  }
}
@media screen and (max-width: 500px) {
  #login-logo {
    display: none !important;
  }
  #nav_buttons {
    display: flex;
    align-items: center;
  }
  #nav_buttons a {
    font-size: 1.2rem !important;
    font-weight: 400 !important;
  }
}
@keyframes breathing {
  0% {
    -webkit-transform: scale(0.9);
    -ms-transform: scale(0.9);
    transform: scale(0.9);
  }
  25% {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
  }
  60% {
    -webkit-transform: scale(0.9);
    -ms-transform: scale(0.9);
    transform: scale(0.9);
  }
  100% {
    -webkit-transform: scale(0.9);
    -ms-transform: scale(0.9);
    transform: scale(0.9);
  }
}
.blur-in {
  animation: blur-in 0.4s linear both;
}

@keyframes blur-in {
  0% {
    filter: blur(12px);
    opacity: 0;
  }
  100% {
    filter: blur(0);
    opacity: 1;
  }
}
.typing {
  animation: typing 3.5s steps(100, end);
}

@keyframes typing {
  from {
    width: 0;
  }
  to {
    width: 100%;
  }
}
@keyframes shaking {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-5px);
  }
  100% {
    transform: translateY(0);
  }
}
html {
  scroll-behavior: smooth;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  min-height: 100vh;
  background-color: #222327;
  font-family: "Poppings", sans-serif;
}

header * {
  color: #fff;
}

main {
  margin: 0 auto;
  width: 95%;
  height: min-content;
}
main * {
  color: #fff;
  background-color: transparent;
}

/*Delete Input Date Placeholder*/
input[type=date]:required:invalid::-webkit-datetime-edit {
  color: transparent;
}

input[type=date]:focus::-webkit-datetime-edit {
  color: #fff !important;
}

#up_button {
  position: fixed;
  font-size: 2rem;
  right: 50px;
  bottom: 50px;
  padding: 20px;
  width: max-content;
  background-color: rgb(45, 47, 51);
  border: 2px solid #92b91f;
  z-index: 1000;
  transition: all 0.4s;
  border-radius: 7px;
  animation: breathing 3s ease-out infinite normal;
}
#up_button i {
  transition: all 0.5s;
}
#up_button:hover {
  background-color: rgb(161, 202, 37);
}
#up_button:hover i {
  color: rgb(45, 47, 51);
}

#main_page_container {
  width: 100%;
  padding: 50px;
  text-align: center;
  padding-bottom: 300px;
}
#main_page_container hr {
  opacity: 0;
  width: 100%;
}
#main_page_container .welcome_title {
  width: 100%;
  color: #fff;
  font-size: 4rem;
  font-weight: 600;
  overflow: hidden;
  white-space: nowrap;
  margin: 0 auto;
  letter-spacing: 0.15em;
}
#main_page_container p {
  color: #92b91f;
  font-size: 1.3rem;
  font-weight: 500;
  overflow: hidden;
  white-space: nowrap;
  margin: 0 auto;
  letter-spacing: 0.15em;
}
#main_page_container .hover_text {
  padding-top: 40px;
  color: #fff;
  font-size: 1.3rem;
  font-weight: 500;
  overflow: hidden;
  white-space: nowrap;
  margin: 0 auto;
  letter-spacing: 0.15em;
}
#main_page_container .image_galery {
  display: flex;
  width: 100%;
  height: 600px;
  padding: 50px;
  transform: skew(-7deg);
}
#main_page_container .image_galery img {
  width: 0;
  flex-grow: 1;
  object-fit: cover;
  opacity: 0.8;
  transition: 0.5s ease;
}
#main_page_container .image_galery img:hover {
  cursor: crosshair;
  width: 50%;
  opacity: 1;
  filter: contrast(120%);
}
#main_page_container #web_description_page {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
#main_page_container #web_description_page h1 {
  width: 100%;
  font-size: 4rem;
  font-weight: 600;
}
#main_page_container #web_description_page img {
  max-width: 30%;
  height: auto;
}
#main_page_container #web_description_page p {
  width: 60%;
  color: #fff;
  line-height: 1.5;
  white-space: pre-wrap;
  padding-top: 20px;
  padding-bottom: 100px;
}
#main_page_container #showcase_container #slider-container {
  display: flex;
  align-items: center;
  justify-content: center;
}
#main_page_container #showcase_container .swiper-button-prev, #main_page_container #showcase_container .swiper-button-next {
  color: #92b91f;
}
#main_page_container #showcase_container .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #92b91f;
}
#main_page_container #showcase_container h1 {
  display: inline-block;
  font-size: 3rem;
  font-weight: 600;
  padding-bottom: 50px;
  animation: shaking 1s infinite;
}
#main_page_container #showcase_container .swiper {
  width: 60%;
  transform: skew(-7deg);
}
#main_page_container #showcase_container .swiper .swiper-slide img {
  width: 100%;
  height: 500px;
  flex-grow: 1;
  object-fit: cover;
}

#plan_container h1 {
  padding-top: 20px;
  font-size: 3rem;
  font-weight: 600;
  animation: shaking 1s infinite;
}
#plan_container .slide-container {
  max-width: 1120px;
  width: 100%;
  padding: 40px 0;
}
#plan_container .slide-content {
  margin: 0 40px;
  overflow: hidden;
  border-radius: 25px;
}
#plan_container .card {
  border-radius: 25px;
  background-color: #121315;
}
#plan_container .image-content,
#plan_container .card-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 10px 14px;
}
#plan_container .image-content {
  position: relative;
  row-gap: 5px;
  padding: 25px 0;
}
#plan_container .overlay {
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background-color: rgb(45, 47, 51);
  border-radius: 25px 25px 0 25px;
}
#plan_container .overlay::before,
#plan_container .overlay::after {
  content: "";
  position: absolute;
  right: 0;
  bottom: -40px;
  height: 40px;
  width: 40px;
  background-color: rgb(45, 47, 51);
}
#plan_container .overlay::after {
  border-radius: 0 25px 0 0;
  background-color: #121315;
}
#plan_container .card-image {
  position: relative;
  height: 150px;
  width: 150px;
  border-radius: 50%;
  background: rgb(161, 202, 37);
  padding: 3px;
}
#plan_container .card-image .card-img {
  height: 100%;
  width: 100%;
  object-fit: cover;
  border-radius: 50%;
}
#plan_container .name {
  margin-top: 6px;
  font-size: 18px;
  font-weight: 600;
  color: #fff;
}
#plan_container .price {
  margin-top: 10px;
  font-size: 18px;
  font-weight: 500;
  color: #fff;
  opacity: 0.8;
}
#plan_container .description {
  margin-top: 10px;
  font-size: 14px;
  color: #fff;
  opacity: 0.7;
  text-align: center;
  white-space: pre-line;
}
#plan_container .button {
  border: none;
  font-size: 16px;
  color: #FFF;
  padding: 8px 16px;
  background-color: #92b91f;
  border-radius: 6px;
  margin: 14px;
  cursor: pointer;
  transition: all 0.3s ease;
}
#plan_container .button:hover {
  background: rgb(161, 202, 37);
}
#plan_container .swiper-navBtn {
  color: #92b91f;
  transition: color 0.3s ease;
}
#plan_container .swiper-navBtn:hover {
  color: rgb(161, 202, 37);
}
#plan_container .swiper-navBtn::before,
#plan_container .swiper-navBtn::after {
  font-size: 35px;
}
#plan_container .swiper-button-next {
  right: 0;
}
#plan_container .swiper-button-prev {
  left: 0;
}

@media screen and (max-width: 520px) {
  #main_page_container .welcome_title {
    font-size: 2.5rem;
    font-weight: 500;
  }
  #main_page_container p {
    font-size: 1rem;
    font-weight: 400;
  }
  #main_page_container .hover_text {
    font-size: 1rem;
    font-weight: 400;
  }
  #web_description_page h1 {
    font-size: 2.2rem !important;
    font-weight: 500 !important;
  }
  #web_description_page p {
    width: 60%;
    color: #fff;
    line-height: 1.5;
    white-space: pre-wrap;
    padding-top: 20px;
    padding-bottom: 100px;
  }
  #showcase_container h1 {
    font-size: 2.2rem !important;
    font-weight: 500 !important;
  }
  .swiper {
    width: 80% !important;
    transform: skew(0deg) !important;
  }
}
@media screen and (max-width: 768px) {
  .slide-content {
    margin: 0 10px;
  }
  .swiper-navBtn {
    display: none;
  }
}
.form_container_layout {
  margin-bottom: 30px;
}
.form_container_layout .form_container_main {
  background-color: #121315;
  padding: 40px;
}
.form_container_layout .form_container_main h1 {
  font-size: 2.8rem;
  font-weight: 300;
  text-align: center;
  margin-bottom: 40px;
  color: #92b91f;
}
.form_container_layout .form_container_main .form_container .access_form .form_layout {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 2.5em;
}
.form_container_layout .form_container_main .form_container .access_form .form_layout .form_box {
  /* Chrome, Safari, Edge, Opera */
  /* Firefox */
}
.form_container_layout .form_container_main .form_container .access_form .form_layout .form_box label {
  color: #92b91f;
  font-size: 1.2rem;
  font-weight: 300;
  padding: 5px;
}
.form_container_layout .form_container_main .form_container .access_form .form_layout .form_box input[type=text], .form_container_layout .form_container_main .form_container .access_form .form_layout .form_box input[type=password], .form_container_layout .form_container_main .form_container .access_form .form_layout .form_box input[type=tel], .form_container_layout .form_container_main .form_container .access_form .form_layout .form_box input[type=date], .form_container_layout .form_container_main .form_container .access_form .form_layout .form_box input[type=number], .form_container_layout .form_container_main .form_container .access_form .form_layout .form_box select {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #222327;
  font-size: 1.2rem;
  font-weight: 300;
  transition: all 0.3s ease;
}
.form_container_layout .form_container_main .form_container .access_form .form_layout .form_box input[type=text]:focus, .form_container_layout .form_container_main .form_container .access_form .form_layout .form_box input[type=password]:focus, .form_container_layout .form_container_main .form_container .access_form .form_layout .form_box input[type=tel]:focus, .form_container_layout .form_container_main .form_container .access_form .form_layout .form_box input[type=date]:focus, .form_container_layout .form_container_main .form_container .access_form .form_layout .form_box input[type=number]:focus, .form_container_layout .form_container_main .form_container .access_form .form_layout .form_box select:focus {
  background-color: #737373;
  outline: none;
  color-scheme: dark;
  transition: all 0.3s ease;
}
.form_container_layout .form_container_main .form_container .access_form .form_layout .form_box input:-webkit-autofill,
.form_container_layout .form_container_main .form_container .access_form .form_layout .form_box input:-webkit-autofill:hover,
.form_container_layout .form_container_main .form_container .access_form .form_layout .form_box input:-webkit-autofill:focus,
.form_container_layout .form_container_main .form_container .access_form .form_layout .form_box input:-webkit-autofill:active {
  -webkit-box-shadow: 0 0 0 30px #222327 inset !important;
  -webkit-text-fill-color: #fff !important;
  background-color: #737373;
  transition: all 0.3s ease;
}
.form_container_layout .form_container_main .form_container .access_form .form_layout .form_box ::-webkit-calendar-picker-indicator {
  filter: invert(1);
}
.form_container_layout .form_container_main .form_container .access_form .form_layout .form_box input::-webkit-outer-spin-button,
.form_container_layout .form_container_main .form_container .access_form .form_layout .form_box input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
.form_container_layout .form_container_main .form_container .access_form .form_layout .form_box input[type=number] {
  appearance: textfield;
  -moz-appearance: textfield;
}
.form_container_layout .form_container_main .form_container .access_form .form_layout .form_box .password_container {
  position: relative;
}
.form_container_layout .form_container_main .form_container .access_form .form_layout .form_box .password_container .fa-eye, .form_container_layout .form_container_main .form_container .access_form .form_layout .form_box .password_container .fa-eye-slash {
  position: absolute;
  right: 4%;
  top: 28%;
  cursor: pointer;
}
.form_container_layout .form_container_main .form_container .access_form #submit_button_container {
  text-align: center;
}
.form_container_layout .form_container_main .form_container .access_form #submit_button_container input[type=submit] {
  width: 80%;
  background-color: #92b91f;
  border: 2px solid #92b91f;
  opacity: 0.8;
  font-size: 1.2rem;
  font-weight: 300;
  padding: 16px 20px;
  margin: 8px 0;
  cursor: pointer;
  transition: all 0.5s ease;
}
.form_container_layout .form_container_main .form_container .access_form #submit_button_container input[type=submit]:hover {
  opacity: 1;
}
.form_container_layout .form_container_main .error_container_layout {
  margin: 0 auto;
  margin-block: 30px;
  padding: 10px;
  width: fit-content;
  background-color: #222327;
  border: 1px solid #92b91f;
  text-align: center;
}
.form_container_layout .form_container_main .error_container_layout h3 {
  display: inline-block;
  text-align: center;
  font-weight: 600;
  margin-right: 15px;
  color: #92b91f;
}
.form_container_layout .form_container_main .error_container_layout h3:last-child {
  margin-right: 0;
}
.form_container_layout .form_container_main .signin {
  margin-top: 30px;
  text-align: center;
}
.form_container_layout .form_container_main .signin a {
  color: #92b91f;
  text-decoration: underline;
}

@media screen and (max-width: 700px) {
  .form_layout {
    grid-template-columns: repeat(1, 1fr) !important;
  }
}
.blur_active {
  filter: blur(20px);
  pointer-events: none;
  user-select: none;
}

.popup {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 9999;
}
.popup .popup_content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #121315;
  border: 2px solid #92b91f;
  color: #92b91f;
  padding: 20px;
  max-width: 80%;
  max-height: 80%;
  overflow-y: auto;
  text-align: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.popup .popup_content h3 {
  width: 100%;
  margin-block: 30px;
  font-size: 1.5rem;
  font-weight: 500;
}
.popup .popup_content h5 {
  font-size: 1.2rem;
  font-weight: 500;
  padding: 10px;
  border: 2px solid #92b91f;
  cursor: pointer;
  transition: all 0.5s;
}
.popup .popup_content h5:hover {
  opacity: 0.7;
}

.admin_panel_main {
  background-color: #121315;
  padding: 20px;
  border-radius: 7px;
}
.admin_panel_main h1 {
  color: #92b91f;
  text-align: center;
}
.admin_panel_main .admin_nav_container {
  margin: 0 auto;
  width: 100%;
  padding: 28px 12%;
  transition: all 0.5s ease;
}
.admin_panel_main .admin_nav_container #admin_nav_list {
  display: flex;
  justify-content: center;
  width: 100%;
}
.admin_panel_main .admin_nav_container #admin_nav_list a {
  display: inline-block;
  font-size: 1.6rem;
  font-weight: 400;
  padding: 5px 0;
  margin: 0px 30px;
  transition: all 0.5s ease;
}
.admin_panel_main .admin_nav_container #admin_nav_list a:hover {
  color: #92b91f;
  transform: translateY(5px);
}

.member_administration_panel_main .member_administration_panel {
  background-color: #222327;
  padding: 20px;
  margin: 0 auto;
  width: fit-content;
  border-radius: 7px;
}
.member_administration_panel_main .member_administration_panel .member_table_container {
  display: flex;
  justify-content: center;
  width: 100%;
  text-align: center;
}
.member_administration_panel_main .member_administration_panel .member_table_container table, .member_administration_panel_main .member_administration_panel .member_table_container tr, .member_administration_panel_main .member_administration_panel .member_table_container th, .member_administration_panel_main .member_administration_panel .member_table_container td {
  padding: 15px;
  border: 2px solid #92b91f;
}
.member_administration_panel_main .member_administration_panel .member_table_container tbody tr:hover {
  background-color: rgb(45, 47, 51);
}
.member_administration_panel_main .member_administration_panel .member_button_container {
  margin-top: 40px;
  text-align: center;
  margin-bottom: 10px;
}
.member_administration_panel_main .member_administration_panel .member_button_container a {
  font-size: 1.2rem;
  padding: 10px;
  color: #fff;
  border: 2px solid #92b91f;
  border-radius: 7px;
  transition: all 0.3s;
}
.member_administration_panel_main .member_administration_panel .member_button_container a:hover {
  color: #92b91f;
}

.adm_form_main_container {
  padding: 20px;
}
.adm_form_main_container .form_container .access_form .form_layout {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 2.5em;
}
.adm_form_main_container .form_container .access_form .form_layout .form_box {
  /* Chrome, Safari, Edge, Opera */
  /* Firefox */
}
.adm_form_main_container .form_container .access_form .form_layout .form_box label {
  color: #92b91f;
  font-size: 1.2rem;
  font-weight: 300;
  padding: 5px;
}
.adm_form_main_container .form_container .access_form .form_layout .form_box input[type=text],
.adm_form_main_container .form_container .access_form .form_layout .form_box input[type=password],
.adm_form_main_container .form_container .access_form .form_layout .form_box input[type=tel],
.adm_form_main_container .form_container .access_form .form_layout .form_box input[type=date],
.adm_form_main_container .form_container .access_form .form_layout .form_box input[type=number],
.adm_form_main_container .form_container .access_form .form_layout .form_box select {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #222327;
  font-size: 1.2rem;
  font-weight: 300;
  transition: all 0.3s ease;
}
.adm_form_main_container .form_container .access_form .form_layout .form_box input[type=text]:focus,
.adm_form_main_container .form_container .access_form .form_layout .form_box input[type=password]:focus,
.adm_form_main_container .form_container .access_form .form_layout .form_box input[type=tel]:focus,
.adm_form_main_container .form_container .access_form .form_layout .form_box input[type=date]:focus,
.adm_form_main_container .form_container .access_form .form_layout .form_box input[type=number]:focus,
.adm_form_main_container .form_container .access_form .form_layout .form_box select:focus {
  background-color: #737373;
  outline: none;
  color-scheme: dark;
  transition: all 0.3s ease;
}
.adm_form_main_container .form_container .access_form .form_layout .form_box input:-webkit-autofill,
.adm_form_main_container .form_container .access_form .form_layout .form_box input:-webkit-autofill:hover,
.adm_form_main_container .form_container .access_form .form_layout .form_box input:-webkit-autofill:focus,
.adm_form_main_container .form_container .access_form .form_layout .form_box input:-webkit-autofill:active {
  -webkit-box-shadow: 0 0 0 30px #222327 inset !important;
  -webkit-text-fill-color: #fff !important;
  background-color: #737373;
  transition: all 0.3s ease;
}
.adm_form_main_container .form_container .access_form .form_layout .form_box ::-webkit-calendar-picker-indicator {
  filter: invert(1);
}
.adm_form_main_container .form_container .access_form .form_layout .form_box input::-webkit-outer-spin-button,
.adm_form_main_container .form_container .access_form .form_layout .form_box input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
.adm_form_main_container .form_container .access_form .form_layout .form_box input[type=number] {
  appearance: textfield;
  -moz-appearance: textfield;
}
.adm_form_main_container .form_container .access_form .submit_button_container {
  text-align: center;
}
.adm_form_main_container .form_container .access_form .submit_button_container input[type=submit] {
  width: 80%;
  background-color: #92b91f;
  border: 2px solid #92b91f;
  opacity: 0.8;
  font-size: 1.2rem;
  font-weight: 300;
  padding: 16px 20px;
  margin: 8px 0;
  cursor: pointer;
  transition: all 0.5s ease;
}
.adm_form_main_container .form_container .access_form .submit_button_container input[type=submit]:hover {
  opacity: 1;
}
.adm_form_main_container .error_container_layout {
  margin: 0 auto;
  margin-block: 30px;
  padding: 10px;
  width: fit-content;
  background-color: #222327;
  border: 1px solid #92b91f;
  text-align: center;
  margin-bottom: 50px;
}
.adm_form_main_container .error_container_layout h3 {
  display: inline-block;
  text-align: center;
  font-weight: 600;
  margin-right: 15px;
  color: #92b91f;
}
.adm_form_main_container .error_container_layout h3:last-child {
  margin-right: 0;
}

.memberships_panel_main {
  padding: 10px;
  padding-bottom: 50px;
}
.memberships_panel_main .memberships_panel {
  background-color: #222327;
  padding: 20px;
  margin: 0 auto;
  width: fit-content;
  border-radius: 7px;
}
.memberships_panel_main .memberships_panel .memberships_table_container {
  display: flex;
  justify-content: center;
  text-align: center;
  width: 100%;
}
.memberships_panel_main .memberships_panel .memberships_table_container table,
.memberships_panel_main .memberships_panel .memberships_table_container tr,
.memberships_panel_main .memberships_panel .memberships_table_container th,
.memberships_panel_main .memberships_panel .memberships_table_container td {
  padding: 15px;
  border: 2px solid #92b91f;
}
.memberships_panel_main .memberships_panel .memberships_table_container tbody tr:hover {
  cursor: pointer;
  background-color: rgb(45, 47, 51);
}
.memberships_panel_main .memberships_panel .memberships_table_container .active_column {
  transition: all 0.5s;
  cursor: pointer;
}
.memberships_panel_main .memberships_panel .memberships_table_container .active_column:hover {
  background-color: rgb(161, 202, 37);
}
.memberships_panel_main .memberships_panel .memberships_button_container {
  margin-top: 40px;
  text-align: center;
  margin-bottom: 10px;
}
.memberships_panel_main .memberships_panel .memberships_button_container a {
  font-size: 1.2rem;
  padding: 10px;
  color: #fff;
  border: 2px solid #92b91f;
  transition: all 0.3s;
  border-radius: 7px;
}
.memberships_panel_main .memberships_panel .memberships_button_container a:hover {
  color: #92b91f;
}
.memberships_panel_main .lds-dual-ring {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin-left: 7px;
}
.memberships_panel_main .lds-dual-ring:after {
  content: " ";
  display: block;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  border: 6px solid #fff;
  border-color: #fff transparent #fff transparent;
  animation: lds-dual-ring 1.2s linear infinite;
}
@keyframes lds-dual-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
.memberships_panel_main .help_container {
  margin-top: 10px;
  text-align: center;
}
.memberships_panel_main .help_container p {
  font-size: 0.9rem;
  font-weight: 600;
  margin-block: 10px;
  color: #92b91f;
}

.my_profile_panel_main .my_profile_container {
  background-color: #121315;
  padding: 40px;
}
.my_profile_panel_main .my_profile_container h1 {
  text-align: center;
  font-size: 2.5rem;
  font-weight: 600;
  color: #92b91f;
  padding-bottom: 10px;
}
.my_profile_panel_main .my_profile_container .my_profile_nav_container ul {
  display: flex;
  justify-content: center;
  width: 100%;
  padding-bottom: 10px;
}
.my_profile_panel_main .my_profile_container .my_profile_nav_container ul a {
  display: inline-block;
  font-size: 2rem;
  font-weight: 400;
  padding: 5px 0;
  margin: 0px 30px;
  transition: all 0.5s ease;
}
.my_profile_panel_main .my_profile_container .my_profile_nav_container ul a:hover {
  color: rgb(161, 202, 37);
  transform: translateY(5px);
}
.my_profile_panel_main .my_profile_container .my_profile_subpage_container .personal_information_container_main {
  margin: 0 auto;
  width: 80%;
}
.my_profile_panel_main .my_profile_container .my_profile_subpage_container .personal_information_container_main h1 {
  font-size: 2rem;
}
.my_profile_panel_main .my_profile_container .my_profile_subpage_container .personal_information_container_main .personal_information_container {
  display: flex;
  flex-wrap: wrap;
  align-content: flex-start;
}
.my_profile_panel_main .my_profile_container .my_profile_subpage_container .personal_information_container_main .personal_information_container .user_info {
  padding: 10px;
  text-align: center;
  flex-basis: 20%;
  margin-bottom: 20px;
}
.my_profile_panel_main .my_profile_container .my_profile_subpage_container .personal_information_container_main .personal_information_container .user_info label {
  padding-bottom: 5px;
  font-size: 1.3rem;
  color: red;
}
.my_profile_panel_main .my_profile_container .my_profile_subpage_container .personal_information_container_main .personal_information_container .user_info label::after {
  content: "dada";
  border-bottom: 1px solid rgb(161, 202, 37);
}
.my_profile_panel_main .my_profile_container .my_profile_subpage_container .personal_information_container_main .personal_information_container .user_info p {
  font-size: 1.5rem;
  padding: 15px;
}

/*# sourceMappingURL=root.cs.map */
