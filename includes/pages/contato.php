<form id="contactform" method="post" action="sendmail.php">
        <div class="itens-form">
            <div class="itens-border">
                <a id="fecharform">
                    <svg class="svg-icon" style="width: 33px;" viewBox="0 0 20 20">
                        <path fill="#000000"
                            d="M12.71,7.291c-0.15-0.15-0.393-0.15-0.542,0L10,9.458L7.833,7.291c-0.15-0.15-0.392-0.15-0.542,0c-0.149,0.149-0.149,0.392,0,0.541L9.458,10l-2.168,2.167c-0.149,0.15-0.149,0.393,0,0.542c0.15,0.149,0.392,0.149,0.542,0L10,10.542l2.168,2.167c0.149,0.149,0.392,0.149,0.542,0c0.148-0.149,0.148-0.392,0-0.542L10.542,10l2.168-2.168C12.858,7.683,12.858,7.44,12.71,7.291z M10,1.188c-4.867,0-8.812,3.946-8.812,8.812c0,4.867,3.945,8.812,8.812,8.812s8.812-3.945,8.812-8.812C18.812,5.133,14.867,1.188,10,1.188z M10,18.046c-4.444,0-8.046-3.603-8.046-8.046c0-4.444,3.603-8.046,8.046-8.046c4.443,0,8.046,3.602,8.046,8.046C18.046,14.443,14.443,18.046,10,18.046z">
                        </path>
                    </svg>
                </a>
                <div class=" d-flex justify-content-start">
                    <div class="form-total">

                        <div class="conj-input mb-3">

                            <div class="input-container">
                                <input id="name" class="input" name="nome" type="text" pattern=".+" required />
                                <label class="label" for="name">Nome</label>
                            </div>


                            <div class="input-container mt-4">
                                <input id="email" class="input" name="email" type="text" pattern=".+" required />
                                <label class="label" for="email">E-mail</label>
                            </div>

                            <div class="input-container mt-4">
                                <input id="telefone" class="input" name="telefone" type="text" pattern=".+" required />
                                <label class="label" for="telefone">Telefone</label>
                            </div>

                            <div class="input-container mt-4">
                                <input id="empresa" class="input" name="empresa" type="text" pattern=".+" required />
                                <label class="label" for="empresa">Nome da Empresa</label>
                            </div>

                            <div class="input-container mt-4 mb-4">
                                <input id="site" class="input" name="site" type="text" pattern=".+" required />
                                <label class="label" for="site">Site</label>
                            </div>


                        </div>







                        <div class="input-group d-flex align-items-left flex-column">
                            <label for="servicos mb-2">Interesse</label>

                            <div class="checkbox">
                                <input type="checkbox" id="site-check" class="checkbox-custom" value="Site"
                                    name="servicos">
                                <label class="checkbox-custom-label" for="site-check">Site</label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" id="mkt" class="checkbox-custom" value="Marketing Digital"
                                    name="servicos">
                                <label class="checkbox-custom-label" for="mkt">Marketing
                                    Digital
                                </label>
                            </div>

                            <div class="checkbox">
                                <input type="checkbox" id="loja" class="checkbox-custom" value="Loja Virtual"
                                    name="servicos">
                                <label class="checkbox-custom-label" for="loja">Loja Virtual</label>
                            </div>






                        </div>
                        <input class="button-sendmail mt-3" type="submit" value="Enviar" />
                        <div id="resp" class="resposta"></div>
                    </div>
                    <div class="img-form">

                    </div>
                </div>
            </div>
        </div>

    </form>