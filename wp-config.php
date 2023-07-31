<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'bdwpti93elementor' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'q${4SN4%0X|,>Jzn[i6*cfO+kst&jt84F{PV[vn9}$FNI.7f$DzYYZ;X6987%y|n' );
define( 'SECURE_AUTH_KEY',  '7=($IP]4X(Am[_VJh:sCYw,}HN(PO65*.bqfx@f^YAQp%*Ms[&-qY@0pZXh7xiwD' );
define( 'LOGGED_IN_KEY',    'bPljm%JY_<Ir r6)9./=v k0ebSm]G:fP7y8yEK6{]1B=nPLsjDNPv{8iqAMUY3s' );
define( 'NONCE_KEY',        '-EPzR<QPQOn_O~@/@0mH4GmSuJ0f{R=^_u(Z@A!7BbPV0G<# R5JG7g`$bFZ?=*b' );
define( 'AUTH_SALT',        'fy$Nv3:85&u 1+kszd3lOdff<wx9 2)3g3hv=X_IG(gUdcqUg&LhXpd1F9DBRyuY' );
define( 'SECURE_AUTH_SALT', 'qVM~z!=M1pUH@K)D|V=7sL8e3}_OQPjl]jFBsO-1c45en/t&L@|U(*TBh`q [X3q' );
define( 'LOGGED_IN_SALT',   'pzHh{Ur:/V8$)e!wdU<r[Wsbo!05^v:7%#8=wu_6zz}7T&32sKP~r;Dnan_w)u_j' );
define( 'NONCE_SALT',       'OeUYAZ]z$mKNE&o,b^y5ZN__ehql$cL67MMXs+5j7Is``c&*z2P..kaK~=%e:b_Y' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
