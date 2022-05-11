
        <div class="title">
            <h4 class="text-light">Adicioanr produtos em estoque</h4>
            <hr class="text-light">
        </div>

        <form action="" method="post">
            <div class="row">
                <div class="col codigo mb-2">
                    <label class="text-light" for="cod">Codigo</label>
                    <input type="text" name="codigo" id="codigo" placeholder="Digite aqui o Codigo" class="form-control">
                </div>
                <div class="col-9 produto mb-2">
                    <label class="text-light" for="produto">Nome do produto / serviço</label>
                    <input type="text" name="produto" id="produto" placeholder="Digite aqui o nome do produto/serviço" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col quantidade mb-2">
                    <label class="text-light" for="quantidade">Quantidade</label>
                    <input type="text" name="quantidade" id="quantidade" placeholder="Digite aqui a quantidade" class="form-control">
                </div>
                <div class="col custo mb-2">
                    <label class="text-light" for="custo">valor de custo</label>
                    <input type="text" name="custo" id="custo" placeholder="Digite aqui o valor de custo" class="form-control">
                </div>
                <div class="col varejo mb-2">
                    <label class="text-light" for="varejo">valor de varejo</label>
                    <input type="text" name="varejo" id="varejo" placeholder="Digite aqui o valor de varejo" class="form-control">
                </div>
            </div>

            <button type="submit" class="btn btn-escuro btn-extend  ">Adicionar Produto</button>
        </form> 