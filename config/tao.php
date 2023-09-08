<?php

return tao_cfg('tao', [
	'datatypes' => [
		'pages' => \TAO\ORM\Model\Page::class,
		'contacts' => \App\Models\ContactModel::class,
		'vacanties' => \App\Models\VacantiesModel::class,
		'summary' => \App\Models\FeedbackVacancyModel::class,
	],
]);