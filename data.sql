

CREATE  TABLE admin ( 
	id                   integer auto_increment NOT NULL  ,
	nom                  varchar(100)  NOT NULL  ,
	email                varchar(100)  NOT NULL  ,
	mdp                  varchar(100)  NOT NULL  ,
	CONSTRAINT pk_tbl PRIMARY KEY ( id )
 );

CREATE  TABLE typecontenu ( 
	id                   integer  auto_increment NOT NULL  ,
	nom                  varchar(40)  NOT NULL  ,
	CONSTRAINT pk_typecontenu PRIMARY KEY ( id )
 );

CREATE  TABLE contenu ( 
	id                   integer auto_increment NOT NULL  ,
	titre                varchar(100)    ,
	content              text  NOT NULL  ,
	daty                 date  NOT NULL  ,
	idtype               integer  NOT NULL  ,
	photo                varchar(100)  NOT NULL  ,
	CONSTRAINT pk_contenu PRIMARY KEY ( id )
 );

ALTER TABLE contenu ADD CONSTRAINT fk_contenu_typecontenu FOREIGN KEY ( idtype ) REFERENCES typecontenu( id );



insert into admin values(NULL,'Mbola Manana','mbola@gmail.com','azerty123');


insert into typecontenu values(NULL,'Effet');
	insert into typecontenu values(NULL,'Solution');


	insert into contenu values(NULL,'Accroissement de la gravité des tempêtes',
		'Les changements de température occasionnent à leur tour des changements dans les précipitations. 
		Cela se traduit par des tempêtes plus violentes et plus fréquentes, susceptibles de provoquer des inondations et des glissements de terrain,
		 de détruire des maisons et des communautés, et de coûter des milliards de dollars',
		 now(),
		 1,
		 'image/effet2.jpg'
		);

		insert into contenu values(NULL,'Hausse des température',
			'Dans la quasi-totalité des régions terrestres,
			 les journées très chaudes et les vagues de chaleur se multiplient. L’année 2020 a été l’une des plus chaudes jamais enregistrées.
			  La hausse des températures provoque une augmentation des maladies liées à la chaleur et peut rendre le travail et les déplacements plus difficiles. En outre,
			 les incendies de forêt démarrent plus facilement et se propagent plus vite lorsque les températures sont plus élevées.',
			 now(),
			 1,
			 'image/effet3.jpg');

		insert into contenu values(NULL,'Économiser l’énergie à la maison',
			'Notre électricité et notre chauffage proviennent en grande partie du charbon, du pétrole et du gaz. Il est possible de
			 réduire sa consommation d’énergie en diminuant le chauffage et la climatisation,
			  en optant pour des ampoules LED et des appareils électriques à faible consommation,
			   en lavant son linge à l’eau froide ou en le suspendant pour le faire sécher au lieu d’utiliser un sèche-linge.',
			 now(),
			 2,
			 'image/solution1.jpg');



		insert into contenu values(NULL,'Se déplacer à pied, à vélo ou en transports en commun',
			'Partout dans le monde, les routes sont surchargées de véhicules, dont la plupart roulent au diesel ou à l’essence.
			 Privilégier la marche ou le vélo à la voiture permet de réduire les émissions de gaz à effet de serre et contribue à une meilleure santé et à une meilleure forme physique.
			 Pour les longues distances, pensez à prendre le train ou le car. Enfin, pratiquez le covoiturage chaque fois que cela est possible.',
			   now(),
			   2,
			   'image/solution2.jpg');

		insert into contenu values(NULL,'Consommer plus d’aliments d’origine végétale',
			'En consommant plus de légumes, de fruits, de céréales complètes, de légumineuses, de noix et de graines, et moins de viande et de produits laitiers, on peut réduire considérablement son impact sur l’environnement.
			 La production d’aliments d’origine végétale entraîne généralement moins d’émissions de gaz à effet de serre et nécessite moins d’énergie, de terres et d’eau.',
			   now(),
			   2,
			   'image/solution3.jpg');