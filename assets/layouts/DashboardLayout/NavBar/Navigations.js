import {
    AlertCircle as AlertCircleIcon,
    BarChart as BarChartIcon, Lock as LockIcon, Settings as SettingsIcon,
    ShoppingBag as ShoppingBagIcon,
    User as UserIcon, UserPlus as UserPlusIcon,
    Users as UsersIcon
} from "react-feather";

const items = [
    {
        href: '/app/dashboard',
        icon: BarChartIcon,
        title: 'Dashboard'
    },
    {
        href: '/app/customers',
        icon: UsersIcon,
        title: 'Customers'
    },
    {
        href: '/app/products',
        icon: ShoppingBagIcon,
        title: 'Products'
    },
    {
        icon: UserIcon,
        title: 'Account',
        children: [
            {
                title: "Basic",
                href: "/app/dashboard",
                icon: UserIcon,
            },
            {
                title: "Editor",
                href: "/app/dashboard",
                icon: UserIcon,
            }
        ]
    },
    {
        href: '/app/settings',
        icon: SettingsIcon,
        title: 'Settings'
    },
    {
        href: '/login',
        icon: LockIcon,
        title: 'Login'
    },
    {
        href: '/register',
        icon: UserPlusIcon,
        title: 'Register'
    },
    {
        href: '/404',
        icon: AlertCircleIcon,
        title: 'Error'
    }
];

export default items;