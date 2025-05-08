import styled from "styled-components";

// component
import Header from "../components/Header";
import Footer from "../components/Footer";
import Nav from "../components/Nav";
import PageContainer from "../components/PageContainer";
import PageContent from "../components/PageContent";
import BigButton from "../components/BigButton";

// style
const ReservationTopBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 20px;
  border-bottom: 1px solid var(--color-border);
  padding-bottom: 36px;
  margin-bottom: 30px;
  transition: var(--transition);

  .darkMode & {
    border-bottom: 1px solid var(--color-gray);
  }
`;

const ReservationTopTitBox = styled.div`
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 8px;
`;

const ReservationTitle = styled.p`
  flex: 1;
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

const ReservationBtnBox = styled.div`
  display: flex;
  align-items: center;
  gap: 8px;
`;

const ReservationButton = styled.button`
  box-shadow: 0 0 0px 2px rgba(0, 63, 136, 0.2);
  border-radius: 6px;
  padding: 4px 12px;
  background: var(--color-default);
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 12px;
  line-height: 130%;
  text-align: center;
  color: var(--color-input);

  &.delete {
    box-shadow: 0 0 0px 3px rgba(255, 206, 206, 0.5);
    background: #e60000;
    color: var(--color-white);
  }
`;

const ReservationTopContent = styled.div`
  width: 100%;
  border-radius: 10px;
  padding: 14px;
  box-shadow: 0 4px 15px 0 rgba(0, 74, 123, 0.2);
  background: var(--color-white);
  transition: var(--transition);

  .price {
    font-family: var(--second-family);
    font-weight: 700;
    font-size: 18px;
    line-height: 130%;
    color: var(--color-black);
    transition: var(--transition);
  }

  .desc {
    font-weight: 400;
    font-size: 12px;
    line-height: 130%;
    color: var(--color-gray);
    transition: var(--transition);
  }

  .time {
    font-weight: 400;
    font-size: 14px;
    line-height: 130%;
    color: var(--color-darkgray);
    margin-top: 20px;
    transition: var(--transition);
  }

  .darkMode & {
    background: var(--color-darkgray2);
  }

  .darkMode & .price {
    color: var(--color-bg2);
  }

  .darkMode & .desc {
    color: var(--color-gray);
  }

  .darkMode & .time {
    color: var(--color-border);
  }
`;

const ReservationTopBtnBox = styled.div`
  display: flex;
  gap: 10px;
  flex-wrap: wrap;

  button {
    width: 100%;
  }

  .wid50 {
    width: calc((100% - 10px) / 2);
  }
`;

const PlanWrapper = styled.div`
  display: flex;
  flex-direction: column;
  gap: 30px;
  margin-bottom: 40px;
`;

const PlanDateBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 10px;
  border-bottom: 1px solid var(--color-border);
  padding-bottom: 30px;
`;

const PlanDateItem = styled.div`
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 16px;
  line-height: 130%;
  color: var(--color-black);
  display: flex;
  align-items: center;
  justify-content: space-between;
  transition: var(--transition);

  span {
    width:100px
  }

  .darkMode & {
    color: var(--color-bg2);
  }
`;

const PlanDate = styled.div`
  flex:1;
  font-family: var(--font-family);
  font-weight: 400;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-black);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-bg2);
  }
`;

const PlanBoxs = styled.div`
  display: flex;
  flex-direction: column;
  gap: 16px;
`;

const PlanBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 10px;
  border-bottom: 1px solid var(--color-border);
  padding-bottom: 16px;
`;

const PlanTxtTitle = styled.div`
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 16px;
  line-height: 130%;
  color: var(--color-black);
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 10px;
  transition: var(--transition);

  span {
    flex: 1;
  }

  .darkMode & {
    color: var(--color-bg2);
  }
`;

const PlanDesc = styled.div`
  font-family: var(--font-family);
  font-weight: 400;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-gray);
  }
`;

const ReservationSummary = () => {
  return (
    <>
      {/* Header */}
      <Header type="title" title="Reservation" />

      {/* contents */}
      <PageContainer padding="LR">
        <PageContent>
          <ReservationTopBox>
            <ReservationTopTitBox>
              <ReservationTitle>4 Day 3 Night Modern Family Package</ReservationTitle>
              <ReservationBtnBox>
                <ReservationButton>Edit</ReservationButton>
              </ReservationBtnBox>
            </ReservationTopTitBox>
            <ReservationTopContent>
              <p className="price">US $480</p>
              <p className="desc">Plan no. 240611MCBB_13010001</p>
              <p className="time">Reservation time : 2024-06-04 (16:19)</p>
            </ReservationTopContent>
            <ReservationTopBtnBox>
              <BigButton className="wid50 ver2">Plan Inquiry</BigButton>
              <BigButton className="wid50 ver2">Plan Memo</BigButton>
              <BigButton>Share Plan Link</BigButton>
            </ReservationTopBtnBox>
          </ReservationTopBox>
          <PlanWrapper>
            <PlanDateBox>
              <PlanDateItem>
                <span>Arrival</span>
                <PlanDate>2024-06-11 (Tuesday)</PlanDate>
              </PlanDateItem>
              <PlanDateItem>
                <span>Departure</span>
                <PlanDate>2024-06-14 (Friday)</PlanDate>
              </PlanDateItem>
            </PlanDateBox>
            <PlanBoxs>
              <PlanBox>
                <PlanTxtTitle>Detail 01</PlanTxtTitle>
                <PlanDesc>Lorem ipsum dolor sit amet consectetur adipiscing elit consequat nullam faucibus vestibulum nuc pellentesque sec donec.</PlanDesc>
              </PlanBox>
              <PlanBox>
                <PlanTxtTitle>Detail 02</PlanTxtTitle>
                <PlanDesc>Lorem ipsum dolor sit amet consectetur adipiscing elit consequat nullam faucibus vestibulum nuc pellentesque sec donec.</PlanDesc>
              </PlanBox>
              <PlanBox>
                <PlanTxtTitle>Detail 03</PlanTxtTitle>
                <PlanDesc>Lorem ipsum dolor sit amet consectetur adipiscing elit consequat nullam faucibus vestibulum nuc pellentesque sec donec.</PlanDesc>
              </PlanBox>
            </PlanBoxs>
          </PlanWrapper>
        </PageContent>
      </PageContainer>

      {/* Footer */}
      <Footer />

      {/* Navigation */}
      <Nav />
    </>
  );
};

export default ReservationSummary;
