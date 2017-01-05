set :application, "Golf"
set :repo_url, "https://github.com/ericwingate/golf.git"
set :scm_passphrase, ""
set :keep_releases, 3

set :composer_install_flags, '--no-dev --no-interaction --verbose --optimize-autoloader'

set :stages, ["production"]
set :default_stage, "production"

namespace :deploy do

task :cp_env do
  on "pi@rasp" do
    execute "cp /tmp/.env /var/www/html/golf/current/"
  end
end

task :chmod_storage do
  on "pi@rasp" do
    execute "chmod -R 777 /var/www/html/golf/current/storage/{logs,framework}"
  end
end

after :finishing, :cp_env
after :finishing, :chmod_storage
end
