import styled from "styled-components";

// component
import Header from "../components/Header";
import Footer from "../components/Footer";
import Nav from "../components/Nav";
import PageContainer from "../components/PageContainer";
import PageContent from "../components/PageContent";

// img
import PayLogo1 from "../assets/img/pay_logo1.png";
import PayLogo2 from "../assets/img/pay_logo2.png";
import PayLogo3 from "../assets/img/pay_logo3.png";
import PayLogo4 from "../assets/img/pay_logo4.png";
import PayLogo5 from "../assets/img/pay_logo5.png";
import PayLogo6 from "../assets/img/pay_logo6.png";
import PayLogo7 from "../assets/img/pay_logo7.png";
import PayLogo8 from "../assets/img/pay_logo8.png";

// style
const PaymentBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 14px;
  margin-bottom: 40px;
`;

const PaymentTitle = styled.p`
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 16px;
  line-height: 130%;
  color: var(--color-black);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-bg2);
  }
`;

const PaymentList = styled.div`
  display: flex;
  flex-direction: column;
  gap: 10px;
`;

const PaymentItem = styled.div`
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 5px;
  padding: 8px 10px;
  height: 50px;
  box-shadow: 0 4px 15px 0 rgba(0, 74, 123, 0.2);
  background: var(--color-white);
  transition: var(--transition);

  img {
    width: auto;
    max-height: 28px;
  }

  .darkMode & {
    background: var(--color-darkgray);
  }
`;

const Payment = () => {
  return (
    <>
      {/* Header */}
      <Header type="title" title="Payment" />

      {/* contents */}
      <PageContainer>
        <PageContent padding="LR">
          <PaymentBox>
            <PaymentTitle>Place order using</PaymentTitle>
            <PaymentList>
              <PaymentItem>
                <img src={PayLogo1} style={{ maxHeight: "38px" }} />
              </PaymentItem>
              <PaymentItem>
                <img src={PayLogo2} />
              </PaymentItem>
              <PaymentItem>
                <img src={PayLogo3} />
              </PaymentItem>
              <PaymentItem>
                <img src={PayLogo4} />
              </PaymentItem>
              <PaymentItem>
                <img src={PayLogo5} />
              </PaymentItem>
              <PaymentItem>
                <img src={PayLogo6} />
              </PaymentItem>
              <PaymentItem>
                <img src={PayLogo7} />
              </PaymentItem>
              <PaymentItem>
                <img src={PayLogo8} />
              </PaymentItem>
            </PaymentList>
          </PaymentBox>
        </PageContent>
      </PageContainer>

      {/* Footer */}
      <Footer />

      {/* Navigation */}
      <Nav />
    </>
  );
};

export default Payment;
