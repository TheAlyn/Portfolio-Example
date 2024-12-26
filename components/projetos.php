<?php
 $projetos = [
    [
        "titulo" => "Meu Portfolio",
        "finalizado" => false,
        "ano" => 2021,
        "descricao" => "Meu primeiro Portfolio. Escrito em PHP e HTML.",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
        "img" => "../img/projeto1.png"
    ],
    [
        "titulo" => "Lista de Tarefas",
        "finalizado" => true,
        "ano" => 2024,
        "descricao" => "Lista de Tarefas. Escrito em PHP e HTML.",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
        "img" => "../img/projeto1.png"
    ],
    [
        "titulo" => "Controle de Leitura de Livros",
        "finalizado" => false,
        "ano" => 2024,
        "descricao" => "Lista de Tarefas. Escrito em PHP e HTML.",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
        "img" => "../img/projeto1.png"
    ],
    [
        "titulo" => "Controle de teste 1",
        "finalizado" => true,
        "ano" => 2024,
        "descricao" => "Lista de Tarefas. Escrito em PHP e HTML.",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
        "img" => "../img/projeto1.png"
    ],
    [
        "titulo" => "Controle de teste 2",
        "finalizado" => false,
        "ano" => 2024,
        "descricao" => "Lista de Tarefas. Escrito em PHP e HTML.",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
        "img" => "../img/projeto1.png"
    ],
    [
        "titulo" => "Controle de teste 3",
        "finalizado" => true,
        "ano" => 2025,
        "descricao" => "Lista de Tarefas. Escrito em PHP e HTML.",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
        "img" => "../img/projeto1.png"
    ],
    [
        "titulo" => "Controle de teste 4",
        "finalizado" => false,
        "ano" => 2023,
        "descricao" => "Lista de Tarefas. Escrito em PHP e HTML.",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
        "img" => "../img/projeto1.png"
    ],
    [
        "titulo" => "Controle de teste 5",
        "finalizado" => true,
        "ano" => 2023,
        "descricao" => "Lista de Tarefas. Escrito em PHP e HTML.",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
        "img" => "../img/projeto1.png"
    ],
];
?>

<?php foreach ($projetos as $projeto): ?>
<div class="bg-slate-800 rounded-lg p-3 flex items-center space-x-3">
    <div class="w-1/5 flex items-center justify-middle">
        <img src="<?=$projeto['img']?>" class="h-50 rounded-md shadow-xl shadow-slate-900" />
    </div>
    <div class="w-4/5">
        <div class="flex gap-3 justify-between">
            <h3 class="font-semibold text-xl">
                <?php if($projeto['finalizado']): ?>✅<?php endif; ?>
                <?=$projeto['titulo']?>
                <?php if($projeto['finalizado']): ?>
                    <span class="text-xs text-gray-400 opacity-50 italic">(finalizado em <?=$projeto['ano']?>)</span>
                <?php else: ?>
                    <span class="text-xs text-gray-400 opacity-50 italic">(em desenvolvimento)</span>
                <?php endif; ?>
            </h3>
            <div class="space-x-1">
            <?php
                $colors = ['fuchsia', 'lime', 'sky', 'rose', 'amber', 'teal', 'purple'];
                foreach ($projeto['stack'] as $posicao => $language):
            ?>
            <span class="bg-<?=$colors[$posicao]?>-400 text-<?=$colors[$posicao]?>-900 rounded-md px-2 py-1 font-semibold text-xs">
                <?=$language?>
            </span>
            <?php endforeach;?>
            </div>
        </div>
        <p class="leading-6">
            <?=$projeto['descricao']?>
        </p>
    </div>
</div>
<?php endforeach; ?>