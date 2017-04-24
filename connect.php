<?php
						//Connexion a la base de donnees
						try
						{
							//données de connexion
							$bdd = new PDO('mysql:host=localhost;dbname=bestv2;charset=utf8','xxxxx', 'xxxxxx');
						}
						// test d'erreur
						catch (Exception $e)
						{
							die('Erreur : ' . $e->getMessage());
						}
					?>
