<?php
/**
 * WordPress���������ļ���
 *
 * ���ļ�������������ѡ�MySQL���á����ݿ����ǰ׺����Կ��
 * WordPress�����趨�Լ�ABSPATH�����������Ϣ�������
 * {@link http://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 * �༭wp-config.php}Codexҳ�档MySQL���þ�����Ϣ����ѯ���Ŀռ��ṩ�̡�
 *
 * ����ļ�����װ���������Զ�����wp-config.php�����ļ���
 * �������ֶ���������ļ�����������Ϊ��wp-config.php����Ȼ�����������Ϣ��
 *
 * @package WordPress
 */

// ** MySQL ���� - ������Ϣ����������ʹ�õ����� ** //
/** WordPress���ݿ������ */
define('DB_NAME', 'wordpress');

/** MySQL���ݿ��û��� */
define('DB_USER', 'root');

/** MySQL���ݿ����� */
define('DB_PASSWORD', 'yao1992618');

/** MySQL���� */
define('DB_HOST', 'localhost');

/** �������ݱ�ʱĬ�ϵ����ֱ��� */
define('DB_CHARSET', 'utf8');

/** ���ݿ��������͡��粻ȷ��������� */
define('DB_COLLATE', '');

/**#@+
 * �����֤��Կ���Ρ�
 *
 * �޸�Ϊ�����һ�޶����ִ���
 * ����ֱ�ӷ���{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org��Կ���ɷ���}
 * �κ��޸Ķ��ᵼ������cookiesʧЧ�������û����������µ�¼��
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';Z:*$xDov$V59mfH.2^:+t9JRnx5-`Xu*n#+&89G+J,/x[uf-aPhQX8:&o&3t1bV');
define('SECURE_AUTH_KEY',  'n+>nxZOj?XrN+lkapn?y2FswSHM6tj$YAr5,fFb],nX=j2y1H`--@-S@%#V|VIPE');
define('LOGGED_IN_KEY',    ';7,dTVrnihDpjydb|^-@.upwIk) s4X~82HaK,K,n47!?@0-!me=dOi{aTZ*^i.G');
define('NONCE_KEY',        'ljG:603V#>x7T;]5fVY%eqYN-)X(H*$r5{TD+Ipk%.Q*DJtzxSun_c[]y(qof1Z*');
define('AUTH_SALT',        'g0M%1@8-c.P;8.A,gz3@ZN)Rb60d@jlbB@l9ld$wpsE1Q:pU5a({LL%:GY0{jU;B');
define('SECURE_AUTH_SALT', 'swnq+&CAw?zN;4zL4Sd]NS?#^TsC{0wSjcEOWo f$!Xq#r5@3X^i)mJVjNvX|!7]');
define('LOGGED_IN_SALT',   'ol13HW(TMb(NLK7:uwE$&a%@^a$D{HTkuB>6< i.K7VWvd jjn$W^TUt(3)S{%>e');
define('NONCE_SALT',       'vDzq Gs,e~i&T 41%:Q~)-#3+amK`T;isUUof.7%JrKX<Sp>algR*bP@v-Q@GL:5');

/**#@-*/

/**
 * WordPress���ݱ�ǰ׺��
 *
 * ���������ͬһ���ݿ��ڰ�װ���WordPress��������Ϊÿ��WordPress����
 * ��ͬ�����ݱ�ǰ׺��ǰ׺��ֻ��Ϊ���֡���ĸ���»��ߡ�
 */
$table_prefix  = 'wp_';

/**
 * ������ר�ã�WordPress����ģʽ��
 *
 * �����ֵ��Ϊtrue��WordPress����ʾ�������ڿ�������ʾ��
 * ǿ�ҽ������������ڿ�������������WP_DEBUG��
 */
define('WP_DEBUG', false);

/**
 * zh_CN���ػ����ã�����ICP��������ʾ
 *
 * �������á��������޸ġ�
 * ������ã����Ƴ���ע�͵����С�
 */
define('WP_ZH_CN_ICP_NUM', true);

/* ���ˣ��벻Ҫ�ټ����༭���뱣�汾�ļ���ʹ����죡 */

/** WordPressĿ¼�ľ���·���� */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** ����WordPress�����Ͱ����ļ��� */
require_once(ABSPATH . 'wp-settings.php');
