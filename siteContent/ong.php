<?php 
include 'includes/header.php';
?>
    <main>
        <section class="extraInfo">
            <h2 class="secondTitle">Nossa história</h2>
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <p class="row">Estabelecida em 20xx, a Associação Miau de Rua é uma organização sem fins
                            lucrativos dedicada a conscientizar a sociedade sobre a importância da guarda responsável de
                            animais, colaborar para controlar a população de gatos de rua e encontrar lares responsáveis
                            para o maior número possível deles. <br>

                            Para garantir sua operação, a Associação Miau de Rua depende exclusivamente de doações da
                            comunidade e parcerias com empresas comprometidas com a causa. No entanto, os recursos
                            obtidos raramente são suficientes para cobrir as despesas mensais, que incluem aluguel,
                            alimentação, limpeza e assistência veterinária, entre outros, e que aumentam constantemente.
                        </p>
                    </div>
                    <div class="col">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./assets/gato2.jpg" class="d-block w-100 img-fluid" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/gatoDeOculos.png" class="d-block w-100 img-fluid" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <blockquote class="blockquote text-center">
            <p class="mb-0">"Os animais dividem conosco o privilégio de terem uma alma."</p>
            <footer class="blockquote-footer"><cite title="Source Title">Pitágoras </cite></footer>
        </blockquote>
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <p class="row">Miau de Rua já prestou assistência a mais de x gatos que se encontravam em
                        situações de abandono. Através de iniciativas práticas, como programas de castração solidária,
                        palestras educativas, resgates de emergência e promoção de adoções responsáveis, a organização
                        se empenha ativamente para criar um impacto positivo e colaborar na construção de um mundo
                        melhor para esses animais desfavorecidos.
                    </p>
                </div>
            </div>
        </div>
        <div class="card-wrapper">
            <div class="card-group ">
                <div class="card rounded-pill">
                    <div class="card-body">
                        <p class="card-text">XX</p>
                        <h5 class="card-title">Gatos adotados</h5>
                    </div>
                </div>
                <div class="card rounded-pill">
                    <div class="card-body">
                        <p class="card-text">XX</p>
                        <h5 class="card-title">Voluntários</h5>
                    </div>
                </div>
                <div class="card rounded-pill">
                    <div class="card-body">
                        <p class="card-text">XX</p>
                        <h5 class="card-title">Parceiros</h5>
                    </div>
                </div>
            </div>
            <div class="card text-center">
                <div class="card-body">
                    <p class="helpClass">Para apoiar a Miau de Rua e manter viva a esperança de ajudar cada vez mais gatinhos em situações de risco, você pode participar das campanhas de arrecadação, comparecer aos eventos organizados pela organização, fazer doações financeiras, adquirir produtos da loja para ajudar na arrecadação de fundos, oferecer-se como voluntário para auxiliar nas atividades da ONG, compartilhar informações sobre a organização em suas redes sociais, divulgar o trabalho da Miau de Rua e ajudar-nos a fazer a diferença tanto na vida deles quanto na nossa. Juntos, podemos criar um impacto positivo e melhorar o mundo para esses adoráveis gatinhos e para todos nós.</p>
                    <a href="contribua.php"><button type="button" class="btn btn-primary active">Nos apoie</button></a>

                </div>
            </div>
        </div>

    </main>
    <?php 
    include 'includes/footer.php';
    ?>
</body>

</html>