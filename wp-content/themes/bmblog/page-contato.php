<?php get_header(); ?>
    <!-- pagina principal-->

    <section class="pd-40-top">
        <div class="container texto-fale-conosco">
            <h2 class="text-main"> Atendimento ao Cliente</h2>
            <p>
                Caso tenha alguma dúvida, sugestão ou reclamação, queremos muito saber o que deseja nos dizer, entre em contato por e-mail, telefone ou pelo nosso formulário de contato.</p>
            <div class="row pd-40-top texto-fale-conosco">
                <div class="col-sm-12 col-xs-12 col-md-6">
                <h3 class="text-main">Telefone</h3>
                <p class="text-main">
                    SAC: +55 11 4508-8998 <br>Atendimento: Segunda à sexta | 09h às 18h <br>
                    E-mail: sac@bothanicamineral.com.br <br>
                </p>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.2195222284263!2d-46.6911243844481!3d-23.632308170102583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5092c5cf2117%3A0x5cb6fbeaf598bcde!2sAv.+Ver.+Jos%C3%A9+Diniz%2C+1370+-+Santo+Amaro%2C+S%C3%A3o+Paulo+-+SP%2C+04604-001!5e0!3m2!1spt-BR!2sbr!4v1527190168855" width="500" height="450" frameborder="0" style="border:0;" allowfullscreen></iframe>
                </div>
                </div>
                <div class="col-sm-12 col-xs-12 col-md-6">
                <div class="pd-40-top">
                    <h2 class="text-main text-center pd-60-top pd-60-bottom inativar-titulo">Enviar mensagem</h2>
                    <div class="form-group">
                    <div class="col-sm-12 formulario">
                        <label class="label-fale-conosco" for="Nome">Nome</label>
                        <input class="borda form-control input-lg blog-contato" type="text" id="Nome" placeholder="Seu Nome" style="border: 2px solid #005620; background-color: #ffffff;">
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="col-sm-12 formulario">
                        <label for="e-mail">E-mail</label>
                        <input class="borda form-control input-lg blog-contato" type="email" id="e-mail" placeholder="exemplo@email.com" style="border: 2px solid #005620; background-color: #ffffff;">
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="col-sm-6 formulario">
                        <label for="telefone">Telefone</label>
                        <input class="borda form-control input-lg blog-contato" type="text" id="telefone" placeholder="XX 00000-0000" style="border: 2px solid #005620;background-color: #ffffff;">
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="col-sm-6 formulario">
                        <label for="Empresa">Empresa</label>
                        <input class="borda form-control input-lg blog-contato" type="text" id="Empresa" placeholder="Sua Empresa" style="border: 2px solid #005620;background-color: #ffffff;">
                    </div>
                    </div>
                    <div class="col-sm-6 formulario">
                    <label for="categoria">Categoria</label>
                    <select class="borda form-control input-lg blog-contato" name="Categoria" id="categoria" style="border: 2px solid #005620; color: #999;">
                        <option value="Categoria">Profissional Credenciado</option>
                        <option value="Categoria">Profissional não Credenciado</option>
                        <option value="Categoria">Cliente</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <div class="col-sm-6 formulario">
                        <label for="Assunto">Assunto</label>
                        <input class="input-lg borda form-control blog-contato" type="text" id="Assunto" placeholder="Sua Empresa" style="border: 2px solid #005620;background-color: #ffffff;">
                    </div>
                    </div>
                    <div class="col-sm-12 formulario">
                    <label for="mensagem">Mensagem</label>
                    <textarea class="input-lg borda form-control blog-contato" name="mensagem" cols="30" rows="10" id="mensagem" placeholder="Digite sua mensagem" style="border: 2px solid #005620;"></textarea>
                    </div>
                    <div class="text-center">
                    <button class="uppercase botao-fale-conosco">enviar </button>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>