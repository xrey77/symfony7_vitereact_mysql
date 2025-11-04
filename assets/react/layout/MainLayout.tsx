// assets/react/layout/MainLayout.tsx
import React, { ReactNode } from 'react';
import Header from '../../components/Header';
import Footer from '../../components/Footer';

interface Props {
    children: ReactNode;
}

const MainLayout: React.FC<Props> = ({ children }) => {
    return (
        <div>
            <Header />
            <main>{children}</main>
            <Footer />
        </div>
    );
};

export default MainLayout;
