-- TABLE SHOPS ================================================================

-- Restaurant
INSERT INTO shops (name, type, price, website, address)
VALUES 	("Le Christine", "restaurant", 3, "http://www.restaurantlechristine.com", "http://www.goo.gl/RbHkt7"),
		("Ma salle à manger", "restaurant", 2, NULL, "http://www.goo.gl/mFF2NB"),
		("Le Reminet", "restaurant", 2, "http://www.lereminet.fr", "http://www.goo.gl/ZrUHDZ"),
		("Café le Petit Pont", "restaurant", 1, "http://www.cafelepetitpont.com", "http://www.goo.gl/KtjKWc"),
		("Au Bougnat", "restaurant", 1, "http://aubougnat.com", "http://www.goo.gl/SFrg6y"),
		("Le Petit Plateau", "restaurant", 1, NULL, "http://www.goo.gl/kyQybA");

-- Hotel
INSERT INTO shops (name, type, price, website, address)
VALUES 	("Au Royal Mad", "hotel", 1, "http://www.auroyalmad.fr", "http://www.goo.gl/VrmQwv"),
		("Hôtel Europe Saint Séverin", "hotel", 2, "http://www.hoteleurope.net", "http://www.goo.gl/qJWjsT"),
		("Hôtel Le Petit Trianon", "hotel", 2, "http://www.hotel-le-petit-trianon.com", "http://www.goo.gl/jHMk1S"),
		("Best Western Hôtel le Jardin de Cluny", "hotel", 3, "http://www.goo.gl/HcecjC", "http://www.goo.gl/dKUzJB"),
		("Hôtel de la Cité Rougement Paris 9", "hotel", 1, "http://www.hotel-paris-rougemont.com", "http://www.goo.gl/tCSs8s"),
		("Hôtel Hospitel", "hotel", 3, "http://www.hotel-hospitel.fr", "http://www.goo.gl/2r9cQ2");

-- TABLE review ===============================================================

INSERT INTO review (author, review, date)
VALUES 	("Rémy", "J'adore la cathédrale notre dame super joli !", CURRENT_DATE),
		("Léo", "Trop bien !", CURRENT_DATE);