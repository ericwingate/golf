server "rasp", user: "pi", roles: [:app, :web, :db], :primary => true
set :deploy_to, "/var/www/html/golf/"

