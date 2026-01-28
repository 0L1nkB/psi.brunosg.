<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCC | Central de Ferramentas</title>
    
    <script>
        if(localStorage.getItem('logado') !== 'sim') {
            window.location.href = "../login.html"; 
        }
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="../assets/style.css">
    <script src="../assets/layout.js"></script>

    <style>
        :root {
            --c-tcc: #0984e3; /* Azul Lógico para TCC */
        }

        /* Container Principal */
        .hub-container {
            width: 100%; max-width: 1000px;
            padding: 20px;
        }

        /* Títulos das Seções */
        .section-label {
            font-size: 1.5rem; font-weight: 800; color: var(--c-tcc);
            margin: 40px 0 20px 0; border-bottom: 2px solid #eee; padding-bottom: 10px;
            display: flex; align-items: center; gap: 10px;
        }

        /* GRID SYSTEM */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 20px;
        }

        /* CARDS */
        .tool-card {
            background: white; padding: 25px; border-radius: 20px;
            border: 1px solid #eee; text-decoration: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.03);
            display: flex; flex-direction: column; align-items: center; text-align: center;
            transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s;
            position: relative; overflow: hidden;
        }

        .tool-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            border-color: var(--c-tcc);
        }

        .card-icon { font-size: 2rem; margin-bottom: 15px; }
        .card-title { font-weight: 700; color: #2d3436; font-size: 1.05rem; margin-bottom: 5px; }
        .card-desc { font-size: 0.85rem; color: #95a5a6; font-weight: 600; }
    </style>
</head>
<body>

    <script>
        carregarHeader("Terapia Cognitiva", "Central de Ferramentas e Psicoeducação");
    </script>

    <div class="hub-container" data-aos="fade-up">

        <div class="section-label" style="color: var(--c-tcc);">
            <i class="fa-solid fa-brain"></i> Psicoeducação TCC
        </div>
        
        <div class="grid">
            <a href="../ferramentas/tcc/psicoeducacao/tcc/tcc.html" class="tool-card">
                <div class="card-icon" style="color: var(--c-tcc);"><i class="fa-solid fa-circle-info"></i></div>
                <div class="card-title">Sobre a TCC</div>
                <div class="card-desc">Fundamentos</div>
            </a>
            <a href="../ferramentas/tcc/psicoeducacao/tcc/pensamentos-automaticos.html" class="tool-card">
                <div class="card-icon" style="color: var(--c-tcc);"><i class="fa-solid fa-comments"></i></div>
                <div class="card-title">Pensamentos</div>
                <div class="card-desc">Automáticos</div>
            </a>
            <a href="../ferramentas/tcc/psicoeducacao/tcc/crencas-intermediarias.html" class="tool-card">
                <div class="card-icon" style="color: var(--c-tcc);"><i class="fa-solid fa-list-ul"></i></div>
                <div class="card-title">Regras</div>
                <div class="card-desc">Crenças Intermediárias</div>
            </a>
            <a href="../ferramentas/tcc/psicoeducacao/tcc/crencas-centrais.html" class="tool-card">
                <div class="card-icon" style="color: var(--c-tcc);"><i class="fa-solid fa-bullseye"></i></div>
                <div class="card-title">Crenças Nucleares</div>
                <div class="card-desc">Centrais</div>
            </a>
            <a href="../ferramentas/tcc/psicoeducacao/tcc/crenca-desamor.html" class="tool-card">
                <div class="card-icon" style="color: var(--c-tcc);"><i class="fa-solid fa-heart-crack"></i></div>
                <div class="card-title">Desamor</div>
                <div class="card-desc">Psicoeducação</div>
            </a>
            <a href="../ferramentas/tcc/psicoeducacao/tcc/crenca-desamparo.html" class="tool-card">
                <div class="card-icon" style="color: var(--c-tcc);"><i class="fa-solid fa-person-falling"></i></div>
                <div class="card-title">Desamparo</div>
                <div class="card-desc">Psicoeducação</div>
            </a>
            <a href="../ferramentas/tcc/psicoeducacao/tcc/crenca-desvalor.html" class="tool-card">
                <div class="card-icon" style="color: var(--c-tcc);"><i class="fa-solid fa-thumbs-down"></i></div>
                <div class="card-title">Desvalor</div>
                <div class="card-desc">Psicoeducação</div>
            </a>
        </div>

        <div class="section-label" style="color: #d63031;">
            <i class="fa-solid fa-toolbox"></i> Ferramentas e Exercícios
        </div>

        <div class="grid">
            <a href="../ferramentas/tcc/distincao-triade.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-shapes"></i></div>
                <div class="card-title">Tríade Cognitiva</div>
                <div class="card-desc">Distinguir Eventos e Pensamentos</div>
            </a>

            <a href="../ferramentas/tcc/conexao-pensamento-sentimento.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-link"></i></div>
                <div class="card-title">Conexão P-S</div>
                <div class="card-desc">Laboratório das Emoções</div>
            </a>

            <a href="../ferramentas/tcc/tecnica-abc.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-code-fork"></i></div>
                <div class="card-title">Técnica A-B-C</div>
                <div class="card-desc">Investigação de Gatilhos</div>
            </a>

            <a href="../ferramentas/tcc/diagrama-conceitualizacao.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-sitemap"></i></div>
                <div class="card-title">Mapa da Mente</div>
                <div class="card-desc">Diagrama de Conceitualização</div>
            </a>

            <a href="../ferramentas/tcc/registro-crenca.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-chart-line"></i></div>
                <div class="card-title">Monitor de Crenças</div>
                <div class="card-desc">Registro Diário</div>
            </a>

            <a href="../ferramentas/tcc/categorizacao-distorcoes.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-bug"></i></div>
                <div class="card-title">Distorções</div>
                <div class="card-desc">Detector de Armadilhas</div>
            </a>

            <a href="../ferramentas/tcc/definicao-termos.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-book"></i></div>
                <div class="card-title">Definições</div>
                <div class="card-desc">Dicionário Pessoal</div>
            </a>

            <a href="../ferramentas/tcc/tornando-definicoes-claras.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-glasses"></i></div>
                <div class="card-title">Clareza</div>
                <div class="card-desc">Teste do Público</div>
            </a>

            <a href="../ferramentas/tcc/exame-evidencias.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-gavel"></i></div>
                <div class="card-title">Tribunal da Mente</div>
                <div class="card-desc">Exame de Evidências</div>
            </a>

            <a href="../ferramentas/tcc/qualidade-evidencias.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-clipboard-check"></i></div>
                <div class="card-title">Auditoria</div>
                <div class="card-desc">Qualidade das Evidências</div>
            </a>

            <a href="../ferramentas/tcc/advogado-defesa.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-user-shield"></i></div>
                <div class="card-title">Advogado de Defesa</div>
                <div class="card-desc">Auto-defesa Racional</div>
            </a>

            <a href="../ferramentas/tcc/verificador-relevancia.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-bullseye"></i></div>
                <div class="card-title">Relevância</div>
                <div class="card-desc">Verificador de Respostas</div>
            </a>

            <a href="../ferramentas/tcc/dramatizacao-pensamentos.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-masks-theater"></i></div>
                <div class="card-title">Arena de Debates</div>
                <div class="card-desc">Dramatização de Pensamentos</div>
            </a>

            <a href="../ferramentas/tcc/grafico-responsabilidade.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-chart-pie"></i></div>
                <div class="card-title">Pizza da Culpa</div>
                <div class="card-desc">Reatribuição de Responsabilidade</div>
            </a>

            <a href="../ferramentas/tcc/fatos-positivos.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-plus-circle"></i></div>
                <div class="card-title">Fatos Positivos</div>
                <div class="card-desc">Foco no Positivo</div>
            </a>

            <a href="../ferramentas/tcc/seta-descendente.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-arrow-down"></i></div>
                <div class="card-title">Seta Descendente</div>
                <div class="card-desc">Busca da Crença Central</div>
            </a>

            <a href="../ferramentas/tcc/crencas-condicionais.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-network-wired"></i></div>
                <div class="card-title">Mapeador de Crenças</div>
                <div class="card-desc">Regras Condicionais</div>
            </a>

            <a href="../ferramentas/tcc/monitoramento-regras.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-clipboard-list"></i></div>
                <div class="card-title">Inspetor de Regras</div>
                <div class="card-desc">Monitoramento de Padrões</div>
            </a>

            <a href="../ferramentas/tcc/pressupostos-secundarios.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-diagram-project"></i></div>
                <div class="card-title">Dominó de Regras</div>
                <div class="card-desc">Pressupostos Secundários</div>
            </a>

            <a href="../ferramentas/tcc/contestacao-deveria.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                <div class="card-title">Transformador</div>
                <div class="card-desc">Do "Deveria" para "Prefiro"</div>
            </a>

            <a href="../ferramentas/tcc/clarificacao-valores.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-gem"></i></div>
                <div class="card-title">Valores</div>
                <div class="card-desc">Clarificação e Prioridades</div>
            </a>

            <a href="../ferramentas/tcc/descolando-rotulos.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-tags"></i></div>
                <div class="card-title">Descolando Rótulos</div>
                <div class="card-desc">Avaliação de Rótulos</div>
            </a>

            <a href="../ferramentas/tcc/busca-variacoes.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-sliders"></i></div>
                <div class="card-title">Busca de Variações</div>
                <div class="card-desc">Espectro do Comportamento</div>
            </a>

            <a href="../ferramentas/tcc/custo-beneficio.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-scale-balanced"></i></div>
                <div class="card-title">Custo-Benefício</div>
                <div class="card-desc">Balança de Decisão</div>
            </a>

            <a href="../ferramentas/tcc/curto-longo-prazo.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-hourglass-half"></i></div>
                <div class="card-title">Curto vs Longo</div>
                <div class="card-desc">Máquina do Tempo</div>
            </a>

            <a href="../ferramentas/tcc/exame-probabilidade.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-calculator"></i></div>
                <div class="card-title">Probabilidades</div>
                <div class="card-desc">Calculadora de Realidade</div>
            </a>

            <a href="../ferramentas/tcc/modificacao-comportamento.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-list-check"></i></div>
                <div class="card-title">Laboratório de Ação</div>
                <div class="card-desc">Modificação Comportamental</div>
            </a>

            <a href="../ferramentas/tcc/aprendizado-lapsos.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-flask"></i></div>
                <div class="card-title">Lab. de Recaídas</div>
                <div class="card-desc">Aprendizado com Lapsos</div>
            </a>

            <a href="../ferramentas/tcc/implicacoes-perfeccionismo.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-file-contract"></i></div>
                <div class="card-title">Contrato Perfeição</div>
                <div class="card-desc">Implicações e Expectativas</div>
            </a>

            <a href="../ferramentas/tcc/custos-perfeicao.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-scale-unbalanced"></i></div>
                <div class="card-title">Balança da Evolução</div>
                <div class="card-desc">Progresso vs. Perfeição</div>
            </a>

            <a href="../ferramentas/tcc/progredir-vs-perfeicao.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-person-hiking"></i></div>
                <div class="card-title">Progredir vs Perfeição</div>
                <div class="card-desc">Conversor de Crítica</div>
            </a>

            <a href="../ferramentas/tcc/utilizando-informacoes.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-chart-gantt"></i></div>
                <div class="card-title">Utilização de Informações</div>
                <div class="card-desc">Além do negativo</div>
            </a>

            <a href="../ferramentas/tcc/vies-confirmacao.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-regular fa-circle-question"></i></div>
                <div class="card-title">Viés de confirmação</div>
                <div class="card-desc">Tirando os óculos escuros</div>
            </a>

            <a href="../ferramentas/tcc/estimativa-probabilidade.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-solid fa-calculator"></i></div>
                <div class="card-title">Estimativa de Probabilidade</div>
                <div class="card-desc">Medo vs. Estatística</div>
            </a>

            <a href="../ferramentas/tcc/exame-logica.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-regular fa-compass"></i></div>
                <div class="card-title">Exame dos Erros de Lógica</div>
                <div class="card-desc">Depuração Mental</div>
            </a>

            <a href="../ferramentas/tcc/observacao-padroes.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-regular fa-eye"></i></div>
                <div class="card-title">Detector de Falsos Padrões</div>
                <div class="card-desc">Falsas Correlações</div>
            </a>

            <a href="../ferramentas/tcc/falsas-dicotomias.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-regular fa-object-ungroup"></i></div>
                <div class="card-title">Falsas Dicotomias</div>
                <div class="card-desc">Saindo do "Tudo ou Nada"</div>
            </a>

            <a href="../ferramentas/tcc/reducao-absurdo.html" class="tool-card">
                <div class="card-icon" style="color: #d63031;"><i class="fa-regular fa-face-meh"></i></div>
                <div class="card-title">Redução ao Absurdo</div>
                <div class="card-desc">Lógica ao Extremo</div>
            </a>
        </div>

    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        carregarFooter();
    </script>

</body>
</html>
