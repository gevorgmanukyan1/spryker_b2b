import register from 'ShopUi/app/registry';
export default register('range-slider', () => import(/* webpackMode: "lazy" */'./range-slider'));
import './nouislider.min.scss';
import './range-slider.scss';