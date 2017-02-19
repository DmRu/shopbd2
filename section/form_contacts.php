<!--
 * Created by PhpStorm.
 * User: DReaM_One
 * Date: 19.02.2017
 * Time: 17:08
 */
-->

<div id="contact" class="pt100 pb100 bg-grad-stellar">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <div class="row">

                            <!-- title start -->
                            <div class="col-md-12 mb50">
                                <h1 class="font-size-normal color-light">
                                    <small class="color-light">Контакты</small>
Оставьте нам сообщение
</h1>
                                <h5 class="color-light">Пожалуста не стесняйтесь задавать нам любые вопросы.<br>Наши сторудники будут рады вам ответить.</h5>
                            </div>
                            <!-- title end -->

                            <!-- contact info start -->
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="color-light el-icon2x" style="width: 100%; height: 32px; background-size: 38px; background: url(../images/vk_line.svg) no-repeat"></div>
                                <h5 class="color-light"><strong>ВКонтатке</strong></h5>
                                <a href="https://vk.com" target="_blank">
                                    <div class="p5 pr15 pl15 buttom_vk_contacts">Написать</div>
                                </a>
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <span class="icon-megaphone color-light el-icon2x"></span>
                                <h5 class="color-light"><strong>Телефон</strong></h5>
                                <p class="color-light">123-456-789</p>
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <span class="icon-envelope color-light el-icon2x"></span>
                                <h5 class="color-light"><strong>E-mail</strong></h5>
                                <p class="color-light">info@beri-dari.online</p>
                            </div>
                            <!-- contact info end -->

                        </div><!-- row left end -->
                    </div><!-- col left end -->

                    <div class="col-md-6">
                        <div class="contact contact-us-one">
                            <div class="col-sm-12 col-xs-12 text-center mb20">
                                <h4 class="pb25 bb-solid-1 text-uppercase">
Отправить сообщение
<small class="text-lowercase">Пожалуйста, заполните форму, и мы свяжемся с вами.</small>
                                </h4>
                            </div>
                            <div name="contactform" id="contactForm" method="post" action="assets/php/send.php">

                                <!-- fullname start -->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="senderName" id="senderName" class="input-md input-rounded form-control" placeholder="Имя" maxlength="100" required>
                                </div>
                                <!-- fullname end -->

                                <!-- email start -->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="senderEmail" id="senderPhone" class="input-md input-rounded form-control" placeholder="+7 (___) ___-___-___" maxlength="100" required>
                                </div>
                                <!-- email end -->

                                <!-- website start
<div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="url" name="senderWebsite" id="senderWebsite" class="input-md input-rounded form-control" placeholder="http://" maxlength="100">
                                </div>
                                <!-- website end -->

                                <!-- security start
<div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="senderHuman" id="senderHuman" class="input-md input-rounded form-control" placeholder="" required>
                                    <input type="hidden" name="checkHuman_a" id="checkHuman_a">
                                    <input type="hidden" name="checkHuman_b" id="checkHuman_b">
                                </div>
                                <!-- security end -->

                                <!-- textarea start -->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="message" id="message" rows="7" required placeholder="Примечание (не обязательно)"></textarea>
                                </div>
                                <!-- textarea end -->

                                <!-- button start -->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button onclick="send()" name="sendMessage" id="sendMessage" class="button-3d button-md button-block button-pasific hover-ripple-out">Отправить</button>
                                </div>
                                <!-- button end

<div id="sendingMessage" class="statusMessage sending-message"><p>Sending your message. Please wait...</p></div>
                                <div id="successMessage" class="statusMessage success-message"><p>Thanks for sending your message! We'll get back to you shortly.</p></div>
                                <div id="failureMessage" class="statusMessage failure-message"><p>There was a problem sending your message. Please try again.</p></div>
                                <div id="incompleteMessage" class="statusMessage"><p>Please complete all the fields in the form before sending.</p></div>
                                -->
                            </div>

                            <div style="container-fluid">
                                <div style="width: 100%; padding-top: 110px; height: 100px; margin-bottom: 65px;">
                                    <div id="sendingMessage" class="statusMessage sending-message"><p>Отправляем сообщение! Пожалуста подождите...</p></div>
                                    <div id="successMessage" class="statusMessage success-message"><p>Сообщение успешно отправлено. Мы свяжемся с вами в бижайшее время</p></div>
                                    <div id="failureMessage" class="statusMessage failure-message"><p>Упс... Что-то пошло не так. Пожалуста попробуйте ще раз.</p></div>
                                    <div id="incompleteMessage" class="statusMessage"><p>Пожалуста заполните все поля перед отправкой</p></div>
                                </div>
                            </div>

                        </div><!-- div contact end -->
                    </div><!-- col end -->

                </div><!-- row end -->
            </div><!-- container end -->
        </div><!-- section contact end -->